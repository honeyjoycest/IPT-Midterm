<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $accounts = [
            [
                'id' => 1,
                'user_id' =>1,
                'acct_name' => 'Treehouse Account',
                'init_invest' => 42324.31,
                'start_date' => '2021-05-23'
            ],
            [
                'id' => 2,
                'user_id' =>2,
                'acct_name' => 'MoonHouse Account',
                'init_invest' => 12324.31,
                'start_date' => '2021-05-23'
            ],
            [
                'id' => 3,
                'user_id' =>3,
                'acct_name' => 'LandHouse Account',
                'init_invest' => 41235.31,
                'start_date' => '2021-05-23'
            ]
        ];
        foreach($accounts as $acc){
            \App\Account::create($acc);
        }
    }
}
