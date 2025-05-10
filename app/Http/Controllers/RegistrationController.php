<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PersonalDetails;
use App\Models\CompanyDetails;
use App\Models\BankDetails;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationFormMail;
use App\Mail\EmailMailqs;


class RegistrationController extends Controller
{
    public function registration(Request $request)
    {
        $validated = $request->validate([


            'fistname' => 'required|string|max:200',
            'othernames' => 'required|string|max:200',
            'email' => 'required|email|unique:personal_details,email',
            'phonenumber' => 'required|string|max:200',
            'country' => 'required|string|max:200',

            'companyname' => 'required|string|max:200',
            'industry' => 'required|string|max:200',
            'designation' => 'required|string|max:200',
            'website' => 'required|string|max:200',

            'bankname' => 'required|string|max:200',
            'accountholdername' => 'required|string|max:200',
            'accountnumber' => 'required|string|max:200',
            'branchaddress' => 'required|string|max:200',
        ]);

        $user = PersonalDetails::create([
            'fistname' => $validated['fistname'],
            'othernames' => $validated['othernames'],
            'email' => $validated['email'],
            'phonenumber' => $validated['phonenumber'],
            'country' => $validated['country'],
        ]);

        CompanyDetails::create([
            'companyname' => $validated['companyname'],
            'industry' => $validated['industry'],
            'designation' => $validated['designation'],
            'website' => $validated['website'],
            'personal_details_id' => $user->id,
        ]);

        BankDetails::create([
            'bankname' => $validated['bankname'],
            'accountholdername' => $validated['accountholdername'],
            'accountnumber' => $validated['accountnumber'],
            'branchaddress' => $validated['branchaddress'],
            'personal_details_id' => $user->id,
        ]);
        Mail::to($validated['email'])->send(new RegistrationFormMail($validated));
        Mail::to($validated['email'])->send(new EmailMailqs($validated));


        return response()->json([
            'success' => true,
            'message' => 'Registration completed successfully.Kindly Check your email to confirm your details',
        ]);
    }
}
