<?php

class HomeController extends BaseController {

	public function index()
	{
		// $someModel = new SomeModel;
  //       $someModel->setConnection('mysql2');
        $users = User::all();
		
		return View::make('home');
	}

	public function createVlinder()
	{
		//grabbing the data from facebook
		$fb_data = Input::get();

		//chekcing if user not already in vlind
		if(isset($fb_data['email']) && $fb_data['email']  != "")
		{
			if(User::where('email', '=', $fb_data['email'] )->count() == 0)
			{
				$random_pass = str_random(7);
				$new_vlinder = User::create(array('name'  =>  $fb_data['name'],
										          'email' =>  $fb_data['email'],
										          'pass'  =>  Hash::make($random_pass)
										         )
										   );

				//get inserted Id
				$vlinder_insertedId = $new_vlinder->id;

				if($vlinder_insertedId > 0)
				{
					$affectedRows = User::find($vlinder_insertedId)->update(array('vlinder_id' => $vlinder_insertedId));
				}

			}
		}

		return $vlinder_insertedId;
	}

}