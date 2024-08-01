<?php

namespace App\Http\Controllers;

use App\Models\Agents;
use App\Models\Contact;
use App\Models\Partners;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function agentPage()
    {
        $agents = Agents::latest()->paginate(10);
        return view('admin.agents.agent', compact('agents'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function agentDetail($id)
    {
        $agents = Agents::where('id',$id)->first();
        return view('admin.agents.agentDetail', compact('agents'));
    }
    public function partnerPage()
    {
        $partners = Partners::latest()->paginate(10);
        return view('admin.clients.clients', compact('partners'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function partnerDetail($id)
    {
        $partners = Partners::where('id',$id)->first();
        return view('admin.clients.partnerDetail', compact('partners'));
    }
    public function partnerStore(Request $request)
    {
        $request->validate([
            'names' => 'required',
            'description' => 'required',
        ]);

        $partner = new Partners();
        $partner->names = $request->input('names');
        $partner->description = $request->input('description');

        if ($image = $request->file('image')) {
            $destinationPath = 'image/partners/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $partner->image = $profileImage;
        }

        $partner->save();

        return redirect()->back();
    }
    //
    public function sendEmail(Request $request)
    {
        // Validate the form data
        $request->validate([
            'names' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'messages' => 'required'
        ]);

        

        // Generate PDF
        $pdf = PDF::loadView('emails.contact', $request->all());

        // Send email
        Mail::send([], [], function ($message) use ($pdf) {
            $message->to('kabosierik@gmail.com')
            ->cc('kericmugisha@gmail.com')
                ->subject('Contact Form Submission')
                ->attachData($pdf->output(), 'contact.pdf');
        });

        Contact::create($request->all());

        return redirect()->back();
    }
}
