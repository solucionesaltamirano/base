<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryfaiconRequest;
use App\Http\Requests\UpdateCategoryfaiconRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Categoryfaicon;
use Illuminate\Http\Request;
use Flash;
use Response;



class CategoryfaiconController extends AppBaseController
{

    

    /**
     * Display a listing of the Categoryfaicon.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        
        
        /** @var Categoryfaicon $categoryfaicons */
        $categoryfaicons = Categoryfaicon::paginate(10);

        return view('admin.categoryfaicons.index')
            ->with('categoryfaicons', $categoryfaicons);
    }

    /**
     * Show the form for creating a new Categoryfaicon.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.categoryfaicons.create');
    }

    /**
     * Store a newly created Categoryfaicon in storage.
     *
     * @param CreateCategoryfaiconRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoryfaiconRequest $request)
    {
        $input = $request->all();

        /** @var Categoryfaicon $categoryfaicon */
        $categoryfaicon = Categoryfaicon::create($input);

        Flash::success('Categoryfaicon saved successfully.');

        return redirect(route('categoryfaicons.index'));
    }

    /**
     * Display the specified Categoryfaicon.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Categoryfaicon $categoryfaicon */
        $categoryfaicon = Categoryfaicon::find($id);

        if (empty($categoryfaicon)) {
            Flash::error('Categoryfaicon not found');

            return redirect(route('categoryfaicons.index'));
        }

        return view('admin.categoryfaicons.show')->with('categoryfaicon', $categoryfaicon);
    }

    /**
     * Show the form for editing the specified Categoryfaicon.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Categoryfaicon $categoryfaicon */
        $categoryfaicon = Categoryfaicon::find($id);

        if (empty($categoryfaicon)) {
            Flash::error('Categoryfaicon not found');

            return redirect(route('categoryfaicons.index'));
        }

        return view('admin.categoryfaicons.edit')->with('categoryfaicon', $categoryfaicon);
    }

    /**
     * Update the specified Categoryfaicon in storage.
     *
     * @param int $id
     * @param UpdateCategoryfaiconRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoryfaiconRequest $request)
    {
        /** @var Categoryfaicon $categoryfaicon */
        $categoryfaicon = Categoryfaicon::find($id);

        if (empty($categoryfaicon)) {
            Flash::error('Categoryfaicon not found');

            return redirect(route('categoryfaicons.index'));
        }

        $categoryfaicon->fill($request->all());
        $categoryfaicon->save();

        Flash::success('Categoryfaicon updated successfully.');

        return redirect(route('categoryfaicons.index'));
    }

    /**
     * Remove the specified Categoryfaicon from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Categoryfaicon $categoryfaicon */
        $categoryfaicon = Categoryfaicon::find($id);

        if (empty($categoryfaicon)) {
            Flash::error('Categoryfaicon not found');

            return redirect(route('categoryfaicons.index'));
        }

        $categoryfaicon->delete();

        Flash::success('Categoryfaicon deleted successfully.');

        return redirect(route('categoryfaicons.index'));
    }
}
