<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFaiconRequest;
use App\Http\Requests\UpdateFaiconRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Faicon;
use Illuminate\Http\Request;
use Flash;
use Response;

class FaiconController extends AppBaseController
{
    /**
     * Display a listing of the Faicon.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Faicon $faicons */
        
        $faicons = Faicon::paginate(10);

        return view('admin.faicons.index')
            ->with('faicons', $faicons);
    }

    /**
     * Show the form for creating a new Faicon.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.faicons.create');
    }

    /**
     * Store a newly created Faicon in storage.
     *
     * @param CreateFaiconRequest $request
     *
     * @return Response
     */
    public function store(CreateFaiconRequest $request)
    {
        $input = $request->all();

        /** @var Faicon $faicon */
        $faicon = Faicon::create($input);

        Flash::success('Faicon saved successfully.');

        return redirect(route('faicons.index'));
    }

    /**
     * Display the specified Faicon.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Faicon $faicon */
        $faicon = Faicon::find($id);

        if (empty($faicon)) {
            Flash::error('Faicon not found');

            return redirect(route('faicons.index'));
        }

        return view('admin.faicons.show')->with('faicon', $faicon);
    }

    /**
     * Show the form for editing the specified Faicon.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Faicon $faicon */
        $faicon = Faicon::find($id);

        if (empty($faicon)) {
            Flash::error('Faicon not found');

            return redirect(route('faicons.index'));
        }

        return view('admin.faicons.edit')->with('faicon', $faicon);
    }

    /**
     * Update the specified Faicon in storage.
     *
     * @param int $id
     * @param UpdateFaiconRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFaiconRequest $request)
    {
        /** @var Faicon $faicon */
        $faicon = Faicon::find($id);

        if (empty($faicon)) {
            Flash::error('Faicon not found');

            return redirect(route('faicons.index'));
        }

        $faicon->fill($request->all());
        $faicon->save();

        Flash::success('Faicon updated successfully.');

        return redirect(route('faicons.index'));
    }

    /**
     * Remove the specified Faicon from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Faicon $faicon */
        $faicon = Faicon::find($id);

        if (empty($faicon)) {
            Flash::error('Faicon not found');

            return redirect(route('faicons.index'));
        }

        $faicon->delete();

        Flash::success('Faicon deleted successfully.');

        return redirect(route('faicons.index'));
    }
}
