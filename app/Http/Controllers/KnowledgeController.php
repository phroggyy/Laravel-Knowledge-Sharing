<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Committee;
use App\Link;

use Illuminate\Http\Request;

class KnowledgeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($committee)
	{
		$committeeData = Committee::find($committee);
		$links = Committee::find($committee)->links;
		return view('committee', compact('links', 'committeeData'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		if ($request->auth == env('UPLOAD_AUTH')) :
			Link::create(['title' => $request->title, 'url' => $request->url, 'description' => $request->description, 'committee' => intval($request->committee)]);
		endif;
		return redirect()->route('knowledge.committee.index', ['committee' => intval($request->committee)]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
