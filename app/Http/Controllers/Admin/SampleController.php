<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sample;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $samples = Sample::all();

        return view('admin.pages.sample.index', [
            'samples' => $samples,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.sample.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vars = $request->except(['_token']);
        Sample::create($vars);

        return redirect(route('admin.samples.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sample = Sample::find($id);

        return view('admin.pages.sample.show', [
            'sample' => $sample,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sample = Sample::find($id);
        
        return view('admin.pages.sample.edit', [
            'sample' => $sample,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sample = Sample::find($id);
        $vars = $request->except(['_token']);
        $sample->update($vars);

        return redirect(route('admin.samples.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sample = Sample::find($id);
        $sample->delete();

        return redirect(route('admin.samples.index'));
    }
}
