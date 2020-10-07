<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $fillable = [
        'user_id',
        'property_claim',
        'policy_annual_premium',
        'incident_severity',
        'insured_hobbies',
        'vehicle_age',
        'injury_claim',
        'capital-gains',
        'capital-loss',
        'total_claim_amount',
        'months_as_customer',
        'witnesses',
        'vehicle_claim',
        'police_report_available',
        'csl_per_person',
        'csl_per_accident',
        'authorities_contacted',
        'umbrella_limit',
        'bodily_injuries',
        'insured_relationship',
        'auto_model',
        'auto_make',
        'collision_en',
        'policy_county',
        'age',
        'policy_deductable',
        'insured_education_level',
        'incident_county',
        'incident_city',
        'incident_period_of_the_day',
        'property_damage',
        'incident_type',
        'insured_occupation',
        'number_of_vehicles_involved',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
