<?php

namespace App\Http\Controllers;

use Auth;
use App\Claim;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ClaimsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $claims = Claim::where('user_id', auth()->id())->get();

        return view('home', compact('claims'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createclaim');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $client = new Client([
            'headers' => [ 'Content-Type' => 'application/json' ]
        ]);
        
        $status = $client->post('https://ifapii.herokuapp.com/predict',
            ['body' => json_encode(
                [
                    'property_claim' => $request->input('property_claim'),
                    'policy_annual_premium' => $request->input('policy_annual_premium'),
                    'incident_severity' => $request->input('incident_severity'),
                    'insured_hobbies' =>$request->input('insured_hobbies'),
                    'vehicle_age' => $request->input('vehicle_age'),
                    'injury_claim' => $request->input('injury_claim'),
                    'capital-gains' => $request->input('capital-gains'),
                    'capital-loss' => $request->input('capital-loss'),
                    'total_claim_amount' => $request->input('total_claim_amount'),
                    'months_as_customer' => $request->input('months_as_customer'),
                    'witnesses' => $request->input('witnesses'),
                    'vehicle_claim' => $request->input('vehicle_claim'),
                    'police_report_available' => $request->input('police_report_available'),
                    'csl_per_person' => $request->input('csl_per_person'),
                    'csl_per_accident' => $request->input('csl_per_accident'),
                    'authorities_contacted' => $request->input('authorities_contacted'),
                    'umbrella_limit' => $request->input('umbrella_limit'),
                    'bodily_injuries' => $request->input('bodily_injuries'),
                    'insured_relationship' => $request->input('insured_relationship'),
                    'auto_model' => $request->input('auto_model'),
                    'auto_make' => $request->input('auto_make'),
                    'collision_en' => $request->input('collision_en'),
                    'policy_county' => $request->input('policy_county'),
                    'age' => $request->input('age'),
                    'policy_deductable' => $request->input('policy_deductable'),
                    'insured_education_level' => $request->input('insured_education_level'),
                    'incident_county' => $request->input('incident_county'),
                    'incident_city' => $request->input('incident_city'),
                    'incident_period_of_the_day' => $request->input('incident_period_of_the_day'),
                    'property_damage' => $request->input('property_damage'),
                    'incident_type' => $request->input('incident_type'),
                    'insured_occupation' => $request->input('insured_occupation'),
                    'number_of_vehicles_involved' => $request->input('number_of_vehicles_involved'),
                ]
            )]
        );

        $data = $status->getBody()->getContents();

        $rawdata = json_decode($data, true);

        $rawdata = array_shift($rawdata);

        $user_id = Auth::user()->id;

        $claim = new \stdClass();

        $request->request->add(['status' => $rawdata, 'user_id' => $user_id]);

        $claim = $request->all();

        Claim::create($claim);

        $claims = Claim::where('user_id', auth()->id())->get();

        toast('Your Claim has been submited!','success');

        return view('home')->with(compact('claims'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Claim  $claim
     * @return \Illuminate\Http\Response
     */
    public function show(Claim $claim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Claim  $claim
     * @return \Illuminate\Http\Response
     */
    public function edit(Claim $claim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Claim  $claim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Claim $claim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Claim  $claim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Claim $claim)
    {
        //
    }
}
