<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
            [
                'id'=>'1',
                'lname'=>'Valleser',
                'fname'=>'Honey Joyce',
                'address'=>'Lucob,Calape,Bohol',
                'phone'=>'09123214',
                'email'=>'honeyjoyce@email.com',
                'password'=>bcrypt('pass_123')
            ],
            [
                'id'=>'2',
                'lname'=>'Hegre',
                'fname'=>'Mathias',
                'address'=>'Tonstad, Norway',
                'phone'=>'09123214',
                'email'=>'honeyjoyce@email.com',
                'password'=>bcrypt('pass_123')
            ],
            [
                'id'=>'3',
                'lname'=>'Gomez',
                'fname'=>'Selena',
                'address'=>'Grand Prairie, Texas',
                'phone'=>'09123214',
                'email'=>'honeyjoyce@email.com',
                'password'=>bcrypt('pass_123')
            ],
        ];
        foreach($list as $user){
            \App\User::create($user);
        }

    }
}
