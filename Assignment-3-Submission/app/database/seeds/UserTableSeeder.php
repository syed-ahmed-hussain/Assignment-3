<?php

class UserTableSeeder extends Seeder{

	public function run(){
		$faker = Faker\Factory::create();
		for($i=0;$i<5;$i++){

			$user = User::create(array(
					'username'=>$faker->unique->userName,
					'email'=> $faker->unique->email,
					'password' => $faker->unique->word,
					'remember_token' =>  str_random(50)


				));
		}



	}


}


?>