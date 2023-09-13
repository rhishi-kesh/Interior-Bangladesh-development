<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    function addteam(){
        return view('backend.pages.team.add_team');
    }
    function addteampost(Request $request){
        $rules = [
            'member_name'=>'required',
            'team_image' => ['required',
            'image',
            'mimes:jpg,png,jpeg',
            'max:2048'],
            'position'=>'required',
        ];
        $cm = [
            'member_name.required'=>'Member Name feild is empty',
            'team_image.required'=>'Image feild is empty',
            'team_image.image'=>'Please Choose An Image',
            'team_image.mimes'=>'Image Formate should Be (png, jpg, jpeg)',
            'team_image.max'=>"Image Can't Be Larger Then 2 MB",
            'position.required'=>'Position feild is empty',
        ];
        $this->validate($request, $rules, $cm);

        if($request->file('team_image')){
            $image = $request->file('team_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $request->team_image->move(public_path('images/team'), $filename);

            Team::insert([
                'member_name' => $request->member_name,
                'position' => $request->position,
                'team_image' => $filename,
                'created_at' => Carbon::now()
            ]);
        }
        return back()->with('success','Member Add Successfull');
    }
    function team(){
        $teams = Team::paginate('10');
        return view('backend.pages.team.team', compact('teams'));
    }
    function teamedit($id){
        $team = Team::findOrFail($id);
        return view('backend.pages.team.team_edit', compact('team'));
    }
    function updateteam(Request $request){
        $rules = [
            'member_name'=>'required',
            'team_image' => [
            'image',
            'mimes:jpg,png,jpeg',
            'max:2048'],
            'position'=>'required',
        ];
        $cm = [
            'member_name.required'=>'Member Name feild is empty',
            'team_image.image'=>'Please Choose An Image',
            'team_image.mimes'=>'Image Formate should Be (png, jpg, jpeg)',
            'team_image.max'=>"Image Can't Be Larger Then 2 MB",
            'position.required'=>'Position feild is empty',
        ];
        $this->validate($request, $rules, $cm);

        $id = $request->id;
        $team = Team::findOrFail($id);

        $fileName = '';

        if ($request->hasFile('team_image')) {
            $fileName = time() . '.' . $request->team_image->getClientOriginalExtension();
            unlink(public_path('images/team').'/'.$team->team_image);
            $request->team_image->move(public_path('images/team'), $fileName);
        } else {
            $fileName = $team->team_image;
        }

        Team::where('id',$id)->update([
            'member_name' => $request->member_name,
            'position' => $request->position,
            'team_image' => $fileName,
            'updated_at' => Carbon::now()
        ]);

        return redirect()->route('team')->with('success','Member Information Updated Successfull');
    }
    function teamdelete($id){
        $team = Team::findOrFail($id);
        unlink(public_path('images/team').'/'.$team->team_image);
        Team::findOrFail($id)->delete();

        return back()->with('delete','Slide Deleted Successfull');
    }
}
