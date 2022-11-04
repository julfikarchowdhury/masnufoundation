<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function projects(){
        $projects=Project::query()->get();
        // $irregular_donators =$irregular_donators->where('type','irregular_donator')->get()->toArray();
        return view('admin.front_page_customization.project.projects',compact('projects'));
    }
    public function add_edit_project(Request $request,$id=null){
        if($id==""){
            $title = "Add Project";
            $project = new Project;
            $message = "Project added successfully!";
        }else{
            $title = "Edit Project";
            $project = Project::find($id);
            $message = "Project updeted successfully!";
        }
        if($request->isMethod('post')){
            //$message = "added successfully";
            
            $data = $request->all();
            $project->name = $data['name'];

            $project->description = $data['description'];
            $project->amount = $data['amount'];
            //$admin->image = $data['image'];
            if ($request->hasFile('image')){
                $image = $request->image;
                $name = $image->getClientOriginalName();
                $image->storeAs('public/admin/front/images/projects',$name);
                // $banner = new BannerImage;
                $project->image = $name;
            }
            $project->status = $data['status'];
            $project->save();

            return redirect('admin/front-page-customization/project/project')->with('success_message',$message);
        }return view('admin.front_page_customization.project.add_edit_projects')->with(compact('title','project'));
    }
    public function delete_project($id){
        Project::where('id',$id)->delete();
        $message = "Project has been deleted successfully!";
        return redirect()->back()->with('success_message',$message);

    }
}
