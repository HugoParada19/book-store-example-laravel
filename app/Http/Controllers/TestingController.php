<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class TestingController extends Controller
{
	public function addBook(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|max:255',
			'author' => 'required|max:255',
			'ISBN' => 'required|unique|max:255',
			'Stock' => 'required',
			'Price' => 'required',
			'Description' => 'required',
		]);

		$book = new Book;
		$book->Name = $request->name;
		$book->Author = $request->author;
		$book->ISBN = $request->ISBN;
		$book->Stock = $request->Stock;
		$book->Price = $request->Price;
		$book->Description = $request->Description;
		$book->save();
		
		//return view('test', ['done' => true]);
		try
		{
			return response()->json(['message' => 'book added with success'], 201);
		}
		catch (\Exception $e)
		{
			return response()->json(['message' => 'Something went wrong'], 409);
		}
	}

	public function getBooks()
	{
		$books = Book:all();
		try
		{
			return response()->json([$books], 201);
		}
		catch(\Exception $e)
		{
			$this->weirdRetl($e);
		}
	}

	public function getBooksById($id)
	{
		$book = Book::find($id);
		return response()->json($book);
	}

	private function weirdRet($e)
	{
		return response()->json(['message' => 'The program went wrong\n' . $e], 409);
	}
}
