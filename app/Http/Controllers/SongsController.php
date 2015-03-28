<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB; //Important to use for DB commands

class SongsController extends Controller {

	public function index()
	{
		// $songs = ['Boyfriend', 'Be Alright', 'Fall']; - Can be placed into method now

		// $songs = $this->getSongs(); - Can now be inserted directly from DB

		$songs = DB::table('songs')->get();
		//dd($songs);  //Research futher

		return view('songs.index', compact('songs'));
	}

	public function show($id)
	{
		//return $id;
		// $song = $this->getSongs()[$id]; -- Removed, can use DB instead

		$song = DB::table('songs')->find($id);

		return view('songs.show', compact('song'));
	}

	/*  -- Removed now sqlite DBA has been created
	private function getSongs()
	{
		return ['Boyfriend', 'Be Alright', 'Fall'];
	}
	*/
}
