<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Organisation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organisation::factory(10)->create()->each(function ($org) {
            $org->comments()->saveMany(Comment::factory(5)->make());
        });
    }
}
