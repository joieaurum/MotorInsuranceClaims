<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->integer('property_claim');
            $table->integer('policy_annual_premium');
            $table->string('incident_severity');
            $table->string('insured_hobbies');
            $table->integer('vehicle_age');
            $table->integer('injury_claim');
            $table->integer('capital-gains');
            $table->integer('capital-loss');
            $table->integer('total_claim_amount');
            $table->integer('months_as_customer');
            $table->integer('witnesses');
            $table->integer('vehicle_claim');
            $table->integer('police_report_available');
            $table->integer('csl_per_person');
            $table->integer('csl_per_accident');
            $table->string('authorities_contacted');
            $table->integer('umbrella_limit');
            $table->integer('bodily_injuries');
            $table->string('insured_relationship');
            $table->string('auto_model');
            $table->string('auto_make');
            $table->integer('collision_en');
            $table->string('policy_county');
            $table->string('age');
            $table->string('policy_deductable');
            $table->string('insured_education_level');
            $table->string('incident_county');
            $table->string('incident_city');
            $table->string('incident_period_of_the_day');
            $table->integer('property_damage');
            $table->string('incident_type');
            $table->string('insured_occupation');
            $table->integer('number_of_vehicles_involved');
            $table->string('status');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('claims');
    }
}
