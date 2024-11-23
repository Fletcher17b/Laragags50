<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;
use App\Models\User;
use Database\Factories\ListingsFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt("123");
        $user = User::factory()->create([
            'name'=>'TestUser',
            'email'=>"email@mail.com",
            'password'=> $password
        ]);

        /* Listing::factory(2)->create([
            'user_id'=>$user->id
        ]); */
       /*  Listing::factory(4)->create();

        Listing::insert([
            [
                'id' => 1,
                'title' => 'Laravel Senior Developer',
                'tags' => 'Laravel,API,Backend',
                'company' => 'Acme Corp',
                'location' => 'Boston, MA',
                'email' => 'email1@email.com',
                'website' => 'https://www.acme.com',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ?'
            ],
            [
                'id' => 2,
                'title' => 'Full-Stack Engineer',
                'tags' => 'Laravel,API,Backend',
                'company' => 'Stark Industries',
                'location' => 'New York, NY',
                'email' => 'email2@email.com',
                'website' => 'https://www.starkindustries.com',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. '
            ]
        ]);
        Listing::insert([
            [
                'id' => 3,
                'title' => 'Test',
                'tags' => 'Special Tag 1,API,Backend',
                'company' => 'Acme Corp',
                'location' => 'Boston, MA',
                'email' => 'email1@email.com',
                'website' => 'https://www.acme.com',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ?'
            ]
        ]); */
    }
}
