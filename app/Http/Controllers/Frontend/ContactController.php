<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(){
        $title = 'contact';
        return view('frontend.contact',compact(
            'title'
        ));
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|min:5|max:255',
            'email' => 'required|email|max:200',
            'subject' => 'required|min:5|max:200',
            'message' => 'required|min:5|max:255',
            'file' => 'nullable|file|mimes:pdf,csv,docx,xlsx'
        ]);
        $fileName = null;
        if($request->hasFile('file')){
            $fileName = time().'.'.$request->file->extension();
            $request->file->move(public_path('storage/contact'), $fileName);
        }
        $contact = Contact::create([
            'name' =>$request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'file' => $fileName,
        ]);
       
        return back()->with('success', 'You message was sent successfully');
    }
}
