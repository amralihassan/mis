<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Operations\ContactOp;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = ContactOp::_fetchAll();
        return view('back-end.pages.contacts', compact('contacts'));
    }

    public function destroy($id)
    {
        $status = ContactOp::_delete($id);
        if ($status) {
            toastr()->success('Deleted successfully');
            return redirect()->route('contacts.index');
        }
    }
}
