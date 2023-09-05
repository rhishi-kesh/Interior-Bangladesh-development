<?php

namespace App\Http\Controllers;

use App\Models\ClientReview;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientReviewController extends Controller
{
    function addreview(){
        return view('backend.pages.review.add_review');
    }
    function addreviewpost(Request $request){
        $rules = [
            'client_name'=>'required',
            'client_place'=>'required',
            'client_photo' => ['required',
            'image',
            'mimes:jpg,png,jpeg',
            'max:2048'],
            'client_speech'=>'required',
        ];
        $cm = [
            'client_name.required'=>'Client Name feild is empty',
            'client_place.required'=>'Client City feild is empty',
            'client_speech.required'=>'Client Speech feild is empty',
            'client_photo.required'=>'Image feild is empty',
            'client_photo.image'=>'Please Choose An Image',
            'client_photo.mimes'=>'Image Formate should Be (png, jpg, jpeg)',
            'client_photo.max'=>"Image Can't Be Larger Then 2 MB",
        ];
        $this->validate($request, $rules, $cm);

        if($request->file('client_photo')){
            $image = $request->file('client_photo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $request->client_photo->move(public_path('images/review'), $filename);

            ClientReview::insert([
                'client_name' => $request->client_name,
                'client_city' => $request->client_place,
                'client_image' => $filename,
                'client_video_speech' => $request->video_speech,
                'client_speech' => $request->client_speech,
                'created_at' => Carbon::now()
            ]);
        }
        return back()->with('success','Client Add Successfull');
    }
    function review(){
        $reviews = ClientReview::simplepaginate('10');
        return view('backend.pages.review.review', compact('reviews'));
    }
    function reviewedit($id){
        $review = ClientReview::findOrFail($id);
        return view('backend.pages.review.review_edit', compact('review'));
    }
    // function updateteam(Request $request){
    //     $rules = [
    //         'member_name'=>'required',
    //         'team_image' => [
    //         'image',
    //         'mimes:jpg,png,jpeg',
    //         'max:2048'],
    //         'position'=>'required',
    //     ];
    //     $cm = [
    //         'member_name.required'=>'Member Name feild is empty',
    //         'team_image.image'=>'Please Choose An Image',
    //         'team_image.mimes'=>'Image Formate should Be (png, jpg, jpeg)',
    //         'team_image.max'=>"Image Can't Be Larger Then 2 MB",
    //         'position.required'=>'Position feild is empty',
    //     ];
    //     $this->validate($request, $rules, $cm);

    //     $id = $request->id;
    //     $team = Team::findOrFail($id);

    //     $fileName = '';

    //     if ($request->hasFile('team_image')) {
    //         $fileName = time() . '.' . $request->team_image->getClientOriginalExtension();
    //         unlink(public_path('images/team').'/'.$team->team_image);
    //         $request->team_image->move(public_path('images/team'), $fileName);
    //     } else {
    //         $fileName = $team->team_image;
    //     }

    //     Team::where('id',$id)->update([
    //         'member_name' => $request->member_name,
    //         'position' => $request->position,
    //         'team_image' => $fileName,
    //         'created_at' => Carbon::now()
    //     ]);

    //     return redirect()->route('team')->with('success','Member Information Updated Successfull');
    // }
    // function teamdelete($id){
    //     $team = Team::findOrFail($id);
    //     unlink(public_path('images/team').'/'.$team->team_image);
    //     Team::findOrFail($id)->delete();

    //     return back()->with('delete','Slide Deleted Successfull');
    // }
}
