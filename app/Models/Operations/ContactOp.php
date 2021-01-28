<?php

namespace App\Models\Operations;

use App\Models\Contact;

class ContactOp extends Contact
{
    public static function _fetchAll()
    {
        return Contact::orderBy('created_at', 'desc')->get();
    }

    public static function _store()
    {
        Contact::firstOrCreate(request()->only([
            'first_name', 'last_name', 'email', 'mobile', 'solution_id', 'country', 'notes',
        ]));
        return true;
    }

    public static function _delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return true;
    }

    public static function _count()
    {
        return Contact::count();
    }
}
