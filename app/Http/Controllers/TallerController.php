<?php

namespace App\Http\Controllers;

use App\Models\Taller;
use Illuminate\Http\Request;

/**
 * Class TallerController
 * @package App\Http\Controllers
 */
class TallerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tallers = Taller::paginate();

        return view('taller.index', compact('tallers'))
            ->with('i', (request()->input('page', 1) - 1) * $tallers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $taller = new Taller();
        return view('taller.create', compact('taller'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Taller::$rules);

        $taller = Taller::create($request->all());

        return redirect()->route('tallers.index')
            ->with('success', 'Taller created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $taller = Taller::find($id);

        return view('taller.show', compact('taller'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $taller = Taller::find($id);

        return view('taller.edit', compact('taller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Taller $taller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Taller $taller)
    {
        request()->validate(Taller::$rules);

        $taller->update($request->all());

        return redirect()->route('tallers.index')
            ->with('success', 'Taller updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $taller = Taller::find($id)->delete();

        return redirect()->route('tallers.index')
            ->with('success', 'Taller deleted successfully');
    }
}
