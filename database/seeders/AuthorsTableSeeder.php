<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table("authors")->insert([
            [
                "name" => "Robert C. Martin"
            ],
            [
                "name" => "Martin Fowler"
            ],
            [
                "name" => "Eric Evans"
            ],
            [
                "name" => "Donald Knuth"
            ],
            [
                "name" => "Steve McConnell"
            ],
            [
                "name" => "Guilherme Silveira"
            ],
            [
                "name" => "Paulo Silveira"
            ],
            [
                "name" => "Maurício Aniche"
            ],
            [
                "name" => "Vinicius Teles"
            ],
            [
                "name" => "Fábio Akita"
            ],
            [
                "name" => "Isaac Asimov"
            ],
            [
                "name" => "Philip K. Dick"
            ],
            [
                "name" => "William Gibson"
            ],
            [
                "name" => "Douglas Adams"
            ],
            [
                "name" => "Neal Stephenson"
            ],       
            ]);
    }
}
