<?php

class AllocationsController extends BaseController {

	/**
	 * Allocation Repository
	 *
	 * @var Allocation
	 */
	protected $allocation;

	public function __construct(Allocation $allocation)
	{
		$this->allocation = $allocation;
		View::share('menu', true);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$allocations = $this->allocation->all();

		return View::make('allocations.index', compact('allocations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('allocations.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Allocation::$rules);

		if ($validation->passes())
		{
			$this->allocation->create($input);

			return Redirect::route('allocations.index');
		}

		return Redirect::route('allocations.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$allocation = $this->allocation->findOrFail($id);

		return View::make('allocations.show', compact('allocation'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$allocation = $this->allocation->find($id);

		if (is_null($allocation))
		{
			return Redirect::route('allocations.index');
		}

		return View::make('allocations.edit', compact('allocation'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Allocation::$rules);

		if ($validation->passes())
		{
			$allocation = $this->allocation->find($id);
			$allocation->update($input);

			return Redirect::route('allocations.show', $id);
		}

		return Redirect::route('allocations.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->allocation->find($id)->delete();

		return Redirect::route('allocations.index');
	}

}
