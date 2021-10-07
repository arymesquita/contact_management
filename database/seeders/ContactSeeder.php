<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Contact;
use App\Models\User;

#use Illuminate\Support\Facades\DB;
#use Illuminate\Support\Facades\Hash;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        
        $users->each(function($user) {
            $user->contacts()->createMany(Contact::factory(10)->make()->toArray());
          
        });

    }
}
