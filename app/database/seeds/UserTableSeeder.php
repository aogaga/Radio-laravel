<?php
/**
 * Created by PhpStorm.
 * User: aogaga
 * Date: 12/15/14
 * Time: 10:48 PM
 */


class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'firstname'     => 'John',
            'lastname'    => 'obidi',
            'email'    => 'obidi@yahoo.com',
            'password' => Hash::make('1234'),
        ));
    }

}