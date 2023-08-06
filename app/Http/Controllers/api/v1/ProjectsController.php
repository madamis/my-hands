<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\api\ApiController;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectsController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return $this->sendResponse($projects, 'projects found');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = $request->all();

        $validator = Validator::make($inputs,[
            'name'=>'required',
            'link'=>'nullable',
            'start_date'=>'required|date',
            'end_date'=>'nullable|date',
            'description'=>'nullable'
        ]);

        if($validator->fails())
        {
            return $this->sendError('validation error',$validator->errors());
        }

        $project = Project::create($inputs);

        return $this->sendCreatedResponse(new ProjectResource($project));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
