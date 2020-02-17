<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartamentRequest;
use App\Models\Departament;
use App\Services\DepartamentService;
use Illuminate\Http\Request;

class DepartamentController extends Controller
{

    const ROUTE_INDEX   = 'departaments.index';
    const ROUTE_UPDATE  = 'departaments.update';
    const ROUTE_EDIT    = 'departaments.edit';
    const ROUTE_STORE   = 'departaments.store';
    const ROUTE_DESTROY = 'departaments.destroy';
    /**
     * @var Departament
     */
    private $model;
    /**
     * @var DepartamentService
     */
    private $service;

    public function __construct(Departament $model, DepartamentService $service)
    {
        $this->model   = $model;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departaments = $this->model::with(Departament::WITH_USERS)->paginate(4);

        return view('departaments.index', ['departaments' => $departaments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departaments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartamentRequest $request)
    {
        $this->service->save($request, $this->model);

        return redirect()->route(static::ROUTE_INDEX);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('departaments.edit', ['model' => $this->model::with(Departament::WITH_USERS)->findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(DepartamentRequest $request, $id)
    {
        $this->service->save($request, $this->model::findOrFail($id));

        return redirect()->route(static::ROUTE_INDEX);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->model::findOrFail($id)->delete();

        return redirect()->route(static::ROUTE_INDEX);
    }
}
