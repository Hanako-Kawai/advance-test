<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last-name', 'first-name', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);

        $request->flash();

        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $lastName = $request->input('last-name');
        $firstName = $request->input('first-name');
        $fullname = $lastName . ' ' . $firstName;

        $contact = [
        'fullname' => $fullname,
        'gender' => $request->input('gender'),
        'email' => $request->input('email'),
        'postcode' => $request->input('postcode'),
        'address' => $request->input('address'),
        'building_name' => $request->input('building_name'),
        'opinion' => $request->input('opinion'),
        ];

        Contact::create($contact);
        return view('thanks');
    }

    public function manage()
    {
        $contact = Contact::all();
        return view('manage', compact('contact'));
    }

    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $contact = Contact::find($id);

        if ($contact) {
        $contact->delete();
        return redirect('/manage')->with('message', 'ご意見を削除しました');
        } else {
        // Handle the case where the contact with the given id is not found.
        return redirect('/manage')->with('error', '削除するご意見が見つかりませんでした');
        }
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $contact = Contact::where('fullname', 'LIKE', '%' . $keyword . '%')->get();

        return view('manage', compact('contact'));
    }

}
