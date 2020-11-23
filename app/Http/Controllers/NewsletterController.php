<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function create()
    {
        return view('newsletter');
    }
 
    public function store(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->email) ) 
        {
           // dd($request->email);
           //Newsletter::subscribePending($request->FirstName);
            //Newsletter::subscribePending($request->email);
            Newsletter::subscribe($request->email, ['FNAME'=>$request->FNAME, 'LNAME'=>$request->LNAME,'phone'=>$request->phone,'ADDRESS'=>$request->ADDRESS]);
            return redirect('newsletter')->with('success', 'Thanks For Subscribe');
        }
        return redirect('newsletter')->with('error', 'Sorry! You have already subscribed ');
            
    }
    public function index(Request $request)
    {
        $listId = env('MAILCHIMP_LIST_ID');

        $mailchimp = new \Mailchimp(env('MAILCHIMP_KEY'));

        $campaign = $mailchimp->campaigns->create('regular', [
            'list_id' => $listId,
            'subject' => 'Example Mail',
            'from_email' => 'rajeshgajjar1997@gmail.com',
            'from_name' => 'Rajesh',
            'to_name' => 'Rajesh Subscribers'

        ], [
            'html' => $request->input('content'),
            'text' => strip_tags($request->input('content'))
        ]);

        //Send campaign
        $mailchimp->campaigns->send($campaign['id']);

        dd('Campaign send successfully.');
    }
}