
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
	return Redirect::to('/signin');
});

Route::get('/register',function(){

	return View::make('signup');

});

Route::post('/register', 'SignUpController@store');

Route::get('/signin',function(){

	return View::make('signin');

});

Route::post('/signin',function(){

	$credentials = Input::only('username','password');
	$username = Input::get('username');
	$password = Input::get('password');

	if(strcmp($username,"system.moderator")==0 && strcmp($password,"system.moderator")==0){
		return Redirect::to('/data');
	}

	if(Auth::attempt($credentials)){


		return Redirect::to('/home');
	}
	
	return Redirect::to('/signin');
});

Route::get('/signout',function(){
	$myfile = fopen("result.php", "w") or die("Unable to open file!");
    fwrite($myfile, "");
    fclose($myfile);

	Auth::logout();
	return View::make('signin');

});

Route::get('/home',array('before' => 'auth',
	function(){

			return View::make('home');
	}
));

Route::post('/home', 'CodeController@store');

Route::get('/data',function(){
	
		return View::make('data'); 
}); 


