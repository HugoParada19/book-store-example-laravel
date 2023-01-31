<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
	
	$book = new Book;
	$book->Name = "test";
	$book->Author = "Voltaire";
	$book->ISBN = "1234-567-89-XYZ";
	$book->Stock = 2;
	$book->Price = 17.32;
	$book->Description = "Livro de teste sobre o Voltaire";
	$book->save();
    }
}
