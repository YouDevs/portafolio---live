<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;
use Validator;

class ProjectsController extends Controller
{
    public function index() {
        $projects = Project::all();
        return view('admin.portfolio.index', ['projects' => $projects]);
    }

    public function store(Request $request) {
        // dd($request->all());
        $new_project = new Project();

        $file = $request->file('featured');
        $random_name = time();
        $destinationPath = 'images/portfolio/';
        $extension = $file->getClientOriginalExtension();
        $filename = $random_name.'-'.$file->getClientOriginalName();
        $uploadSuccess = $request->file('featured')->move($destinationPath, $filename);

        $new_project->title = $request->title;
        $new_project->description = $request->description;
        $new_project->featured = $filename;

        $new_project->save();

        return redirect()->route('admin.portfolio.index');
    }

    public function edit($projectId) {
        $project = Project::find($projectId);
        return view('admin.portfolio.edit', ['project' => $project]);
    }

    public function update(Request $request, $projectId) {
        $project = Project::find($projectId);
        // LA VALIDACIÓN:
        $rules = [
            'title' => 'required|',
            'description' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if($request->hasFile('featured'))
        {
            $file = $request->file('featured');
            $random_name = time();
            $destinationPath = 'images/portfolio/';
            $extension = $file->getClientOriginalExtension();
            $filename = $random_name.'-'.$file->getClientOriginalName();
            $uploadSuccess = $request->file('featured')->move($destinationPath, $filename);
            $project->featured = $filename;
        }
        // unlink($destinationPath.$talent->featured);

        $project->title = $request->title;
        $project->description = $request->description;

        $project->save();

        return redirect()->route('admin.portfolio.index');
    }

    public function delete(Request $request, $projectId) {
        $project = Project::find($projectId);
        $project->delete();
        return redirect()->back();
    }
}
