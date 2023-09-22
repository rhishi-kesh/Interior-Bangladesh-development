<?php

namespace App\Http\Controllers;

use App\Models\ContactMassage;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $massagess = ContactMassage::paginate('7');
        $newsletters = Newsletter::paginate('7');
        return view('backend.pages.index', compact('massagess', 'newsletters'));
    }
    public function deleteMassage($id){

        ContactMassage::findOrFail($id)->delete();
        return back()->with('delete','Contact Massage Deleted Successfull');
    }
    public function contactsearch(Request $request){

        $search = $request->search;
        $massagess = ContactMassage::query()->where('name', 'LIKE', "%{$search}%")->paginate('7');
        return view('backend.pages.index', compact('massagess', 'search'));
    }
    public function newsletterdelete($id){

        Newsletter::findOrFail($id)->delete();
        return back()->with('delete','Newsletter Mail Deleted Successfull');
    }
}
