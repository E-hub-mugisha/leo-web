<?php

namespace App\Http\Controllers;

use App\Models\Agents;
use App\Models\Regions;
use Illuminate\Http\Request;

class AgentsController extends Controller
{
    public function createStep1(Request $request)
    {
        $agent = $request->session()->get('agent');
        return view('agents.create-step1', compact('agent'));
    }
    public function postCreateStep1(Request $request)
    {

        $validatedData = $request->validate([
            'names' => 'required',
            'nid' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'status' => 'required',
            'education' => 'required',
            'nextKinNames' => 'required',
            'nextKinPhone' => 'required',
        ]);

        if (empty($request->session()->get('agent'))) {
            $agent = new Agents();
            $agent->fill($validatedData);
            $request->session()->put('agent', $agent);
        } else {
            $agent = $request->session()->get('agent');
            $agent->fill($validatedData);
            $request->session()->put('agent', $agent);
        }

        return redirect('/became-an-agent/create-step2');
    }
    /**
     * Show the step 2 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep2(Request $request)
    {
        $agent = $request->session()->get('agent');
        return view('agents.create-step2', compact('agent'));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep2(Request $request)
    {
        $validatedData = $request->validate([

            'province' => 'required',
            'district' => 'required',
            'sector' => 'required',
            'cell' => 'required',
            'village' => 'required',
            'isibo' => 'required',
        ]);

        if (empty($request->session()->get('agent'))) {
            $agent = new Agents();
            $agent->fill($validatedData);
            $request->session()->put('agent', $agent);
        } else {
            $agent = $request->session()->get('agent');
            $agent->fill($validatedData);
            $request->session()->put('agent', $agent);
        }
        return redirect('/became-an-agent/create-step3');
    }
    /**
     * Show the step 2 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep3(Request $request)
    {
        $agent = $request->session()->get('agent');
        return view('agents.create-step3', compact('agent'));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep3(Request $request)
    {
        $validatedData = $request->validate([

            'businessNames' => 'required',
            'tinNumber' => 'required',
            'businessCategory' => 'required',
            'services' => 'required',
        ]);
        
        if (empty($request->session()->get('agent'))) {
            $agent = new Agents();
            $agent->fill($validatedData);
            $request->session()->put('agent', $agent);
        } else {
            $agent = $request->session()->get('agent');
            $agent->fill($validatedData);
            $request->session()->put('agent', $agent);
        }
        return redirect('/became-an-agent/create-step4');
    }
    /**
     * Show the step 2 Form for creating a new agent.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep4(Request $request)
    {
        $agent = $request->session()->get('agent');
        return view('agents.create-step4', compact('agent'));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep4(Request $request)
    {
        $validatedData = $request->validate([

            'terms' => 'required',
            'acceptance' => 'required',
        ]);

        if (empty($request->session()->get('agent'))) {
            $agent = new Agents();
            $agent->fill($validatedData);
            $request->session()->put('agent', $agent);
        } else {
            $agent = $request->session()->get('agent');
            $agent->fill($validatedData);
            $request->session()->put('agent', $agent);
        }
        return redirect('/became-an-agent/previewPage');
    }
    /**
     * Show the Product Review page
     *
     * @return \Illuminate\Http\Response
     */
    public function createPreview(Request $request)
    {
        $agent = $request->session()->get('agent');
        return view('agents.previewPage', compact('agent'));
    }
    public function store(Request $request)
    {
        $agent = $request->session()->get('agent');
        $agent->save();
        return redirect('/agent/profile');
    }
    
    public function accountProfile()
    {
        $agent = Agents::all();
        return view('agentsProfile.account_profile', compact('agent'));
    }
}
