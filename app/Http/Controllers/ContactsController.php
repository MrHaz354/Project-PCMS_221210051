<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contacts::all();
        return view('layouts.private.contacts.index', compact('contacts'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|string',
            'contact_message' => 'required|string',
        ]);

        try {
            DB::beginTransaction();
            Contacts::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'contact_message' => $request->contact_message,
            ]);
            $this->sendEmail($request->all());
            DB::commit();
            return redirect()->back()->with('success', 'Berhasil mengirim pesan dan email');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Gagal mengirim pesan dan email');
        }
    }
    private function sendEmail($data)
    {
        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->to($data['email'], $data['name'])
                    ->subject('Email from Contact Form');
        });
    }
}