<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    function addclient(){
        return view('backend.pages.client.add_client');
    }
    function addclientpost(Request $request){
        $rules = [
            'client_logo' => ['required',
            'image',
            'mimes:jpg,png,jpeg',
            'max:2048']
        ];
        $cm = [
            'client_logo.required'=>'Image feild is empty',
            'client_logo.image'=>'Please Choose An Image',
            'client_logo.mimes'=>'Image Formate should Be (png, jpg, jpeg)',
            'client_logo.max'=>"Image Can't Be Larger Then 2 MB",
        ];
        $this->validate($request, $rules, $cm);

        if($request->file('client_logo')){
            $image = $request->file('client_logo');
            echo $filename = time() . '.' . $image->getClientOriginalExtension();
            $request->client_logo->move(public_path('images/client'), $filename);

            Clients::insert([
                'client_logo' => $filename,
                'created_at' => Carbon::now()
            ]);
        }
        return back()->with('success','Client Logo Add Successfull');
    }
    function client(){
        $clients = Clients::paginate('10');
        return view('backend.pages.client.client', compact('clients'));
    }
    function clientedit($id){
        $Client = Clients::findOrFail($id);
        return view('backend.pages.client.client_edit', compact('Client'));
    }
    function clientreview(Request $request){
        $rules = [
            'client_logo' => [
            'image',
            'mimes:jpg,png,jpeg',
            'max:2048']
        ];
        $cm = [
            'client_logo.required'=>'Image feild is empty',
            'client_logo.image'=>'Please Choose An Image',
            'client_logo.mimes'=>'Image Formate should Be (png, jpg, jpeg)',
            'client_logo.max'=>"Image Can't Be Larger Then 2 MB",
        ];
        $this->validate($request, $rules, $cm);

        $id = $request->id;
        $client = Clients::findOrFail($id);

        $fileName = '';

        if ($request->hasFile('client_logo')) {
            $fileName = time() . '.' . $request->client_logo->getClientOriginalExtension();
            unlink(public_path('images/client').'/'.$client->client_logo);
            $request->client_logo->move(public_path('images/client'), $fileName);
        } else {
            $fileName = $client->client_logo;
        }

        Clients::where('id',$id)->update([
            'client_logo' => $fileName,
            'updated_at' => Carbon::now()
        ]);

        return redirect()->route('client')->with('success','Client Logo Updated Successfull');
    }
    function clientdelete($id){
        $client = Clients::findOrFail($id);
        unlink(public_path('images/client').'/'.$client->client_logo);
        Clients::findOrFail($id)->delete();

        return back()->with('delete','Client Logo Deleted Successfull');
    }
}
