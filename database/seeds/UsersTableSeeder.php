<?php

use App\Models\Team;
use App\Models\User;
use App\Models\ValueObjects\TeamCategory;
use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: Jetse
 * Date: 30-11-2017
 * Time: 11:35
 */

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $team1 = Team::create(['name' => 'Team 1', 'category' => TeamCategory::HEREN]);

        User::create([
            'name' => 'Testgebruiker 1',
            'email' => 'test@1.nl',
            'password' => bcrypt('123456'),
            'team_id' => $team1->id,
        ]);

        User::create([
            'name' => 'Testgebruiker 2',
            'email' => 'test@2.nl',
            'password' => bcrypt('123456'),
            'team_id' => $team1->id,
        ]);

        $team2 = Team::create(['name' => 'Team 1', 'category' => TeamCategory::HEREN]);

        User::create([
            'name' => 'Testgebruiker 3',
            'email' => 'test@3.nl',
            'password' => bcrypt('123456'),
            'team_id' => $team2->id,
        ]);

        User::create([
            'name' => 'Testgebruiker 4',
            'email' => 'test@4.nl',
            'password' => bcrypt('123456'),
            'team_id' => $team2->id,
        ]);

        \App\Models\Vacancy::create([
            'name' => 'Een vacature',
            'points' => '5',
            'quantity' => '3',
        ]);
    }
}