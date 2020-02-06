<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactCtrl extends Controller
{
    public function sendContactForm(Request $req) {

        // Into Database
        $this->createDatabaseContact($req);

        // Varify Data
        $data = $this->validateData($req);

        // Send Email
        $this->sendEmail($data);

        // Get view
        return $this->returnView($data);
    }

    protected function returnView ($data) {
        return view('thanks');
    }

    protected function sendEmail ($data) {
        \Mail::raw('Text to e-mail', function ($message) {
            $message->from('info@corporate-happiness.de', 'New Work Finance');
            $message->subject('New Work Finance - Kontaktformular');

            // Receiver
            if (\App::environment(['local'])) {
                // The environment is either local OR staging...
                $message->to('a.bachschmid@corporate-happiness.de');
            } else {
                // Its Production / Live
                $message->to('info@corporate-happiness.de');
            }
        });
    }

    protected function createDatabaseContact($req) {
        Contact::create([
            'email' => $req->data['email'],
            'ip'    => $req->ip(),
            'firstname' => $req->data['firstname'],
            'lastname' => $req->data['lastname'],
            'email' => $req->data['email'],
            'position' => $req->data['position'],
            'streetandnumber' => $req->data['streetandnumber'],
            'zipandlocation' => $req->data['zipandlocation'],
            'phone' => $req->data['phone'],
            'company' => $req->data['company'],
            'ustid' => $req->data['ustid'],
            'message' => $req->data['message'],
            'data'  => json_encode($req->data, JSON_FORCE_OBJECT)
        ]);
    }

    protected function validateData ($req) {
        return $req->validate([
            'data.firstname' => 'required',
            'data.lastname' => 'required',
            'data.email' => 'required|email|max:255',
            'data.position' => '',
            'data.streetandnumber' => '',
            'data.zipandlocation' => '',
            'data.phone' => '',
            'data.company' => '',
            'data.ustid' => '',
            'data.message' => '',
        ]);
    }
}
