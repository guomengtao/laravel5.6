<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        // DB::insert('insert into laravel_lesson (name) values (?)', [ 'learning_laravel5.6']);


        // $affected = DB::delete('delete from laravel_lesson   where id = ?', ['8']);


        $affected = DB::delete('delete from laravel_lesson   where id <= 15');

        // $deleted = DB::delete(‘delete from users’); // No parameters

        // $affected = DB::delete('delete from laravel_lesson   where id = 5');


        // $affected = DB::update('update laravel_lesson set age = 103 where id = ?', ['1']);

 
        // dd($affected);
        dump($affected);

        $users = DB::select('select * from laravel_lesson ');
        $email = "guomengtao@gmail.com";
  //       dump($users);


  //       foreach ($users as $user) {
		//     echo $user->name . "age:".  $user->age ."<br>";
		// }

        // return "123456 - " .$id;
        return view('show', ['users' => $users]);
    }

    public function list()
    {
        // return "list";

         $users = DB::select('select * from laravel_lesson');
         dump($users);
       return view('jack');
    }

}