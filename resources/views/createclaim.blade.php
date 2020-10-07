@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8">
  <div class="py-8">
    <div>
        <h1 class="mb-8 font-bold text-3xl">
        <a class="text-indigo-light hover:text-indigo-dark" href="/home">Claims</a>
        <span class="text-indigo-light font-medium">/</span> Submit
        </h1>
    </div>

    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto"> 
      <form action="{{ route('claims.store') }}" method="POST">
      @csrf
      <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/5 px-3 mb-6 md:mb-0">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-first-name">
                Property Claim
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="property_claim" value="{{old('property_claim')}}" type="number" placeholder="780">
            </div>
            <div class="md:w-1/5 px-3 mb-6 md:mb-0">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-first-name">
                Policy Annual Premium
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="policy_annual_premium" value="{{old('policy_annual_premium')}}" type="number" placeholder="1950">
            </div>
            <div class="md:w-1/5 px-3">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-last-name">
                Incident Severity
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="incident_severity" value="{{old('incident_severity')}}">
                <option value="Minor Damage">Minor Damage</option>
                <option value="Major Damage">Major Damage</option>
                <option value="Total Loss">Total Loss</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            </div>
            <div class="md:w-1/5 px-3">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-last-name">
                Insured Hobbies
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" name="insured_hobbies" value="{{old('insured_hobbies')}}" type="text" placeholder="board-games">
            </div>
            <div class="md:w-1/5 px-3 mb-6 md:mb-0">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-first-name">
                Vehicle Age
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{old('vehicle_age')}}" name="vehicle_age" id="grid-state">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            </div>
        </div>
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/5 px-3 mb-6 md:mb-0">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-first-name">
                Injury Claim
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="injury_claim" value="{{old('injury_claim')}}" id="grid-first-name" type="text" placeholder="980">
            </div>
            <div class="md:w-1/5 px-3">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-last-name">
                Capital Gains
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" name="capital-gains" value="{{old('capital-gains')}}" id="grid-last-name" type="text" placeholder="20">
            </div>
            <div class="md:w-1/5 px-3">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-last-name">
                Capital Loss
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" name="capital-loss" value="{{old('capital-loss')}}" id="grid-last-name" type="text" placeholder="100">
            </div>
            <div class="md:w-1/5 px-3 mb-6 md:mb-0">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-first-name">
                Total Claim Amount
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="total_claim_amount" value="{{old('total_claim_amount')}}" id="grid-first-name" type="text" placeholder="10000">
            </div>
            <div class="md:w-1/5 px-3 mb-6 md:mb-0">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-first-name">
                Months As Customer
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="months_as_customer" value="{{old('months_as_customer')}}" id="grid-state">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            </div>
        </div>
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/5 px-3">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-last-name">
                Witnesses
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="witnesses" value="{{old('witnesses')}}" id="grid-state">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            </div>
            <div class="md:w-1/5 px-3">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-last-name">
                Vehicle Claim
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" name="vehicle_claim" value="{{old('vehicle_claim')}}" id="grid-last-name" type="text" placeholder="Doe">
            </div>
            <div class="md:w-1/5 px-3 mb-6 md:mb-0">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-first-name">
                Police Report Available
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="police_report_available" value="{{old('police_report_available')}}" id="grid-state">
                <option value="1">Yes</option>
                <option value="0">No</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            </div>
            <div class="md:w-1/5 px-3 mb-6 md:mb-0">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-first-name">
                Csl Per Person
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="csl_per_person" value="{{old('csl_per_person')}}" id="grid-state">
                <option value="100">100</option>
                <option value="250">250</option>
                <option value="500">500</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            </div>
            <div class="md:w-1/5 px-3">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-last-name">
                Csl Per Accident
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="csl_per_accident" value="{{old('csl_per_accident')}}" id="grid-state">
                <option value="300">300</option>
                <option value="500">500</option>
                <option value="1000">1000</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            </div>
        </div>
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/5 px-3">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-last-name">
                Authorities Contacted
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="authorities_contacted" value="{{old('authorities_contacted')}}" id="grid-state">
                <option>None</option>
                <option>Police</option>
                <option>Ambulance</option>
                <option>Fire</option>
                <option>Other</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            </div>
            <div class="md:w-1/5 px-3 mb-6 md:mb-0">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-first-name">
                Age
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="age" value="{{old('age')}}" id="grid-first-name" type="text" placeholder="30">
            </div>
            <div class="md:w-1/5 px-3 mb-6 md:mb-0">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-first-name">
                Umbrella Limit
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="umbrella_limit" value="{{old('umbrella_limit')}}" id="grid-first-name" type="text" placeholder="500000000">
            </div>
            <div class="md:w-1/5 px-3">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-last-name">
                Bodily Injuries
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" name="bodily_injuries" value="{{old('bodily_injuries')}}" id="grid-last-name" type="text" placeholder="3">
            </div>
            <div class="md:w-1/5 px-3">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-last-name">
                Insured Relationship
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" name="insured_relationship" value="{{old('insured_relationship')}}" id="grid-last-name" type="text" placeholder="Husband">
            </div>
        </div>
        <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/4 px-3 mb-6 md:mb-0">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-first-name">
                Auto Make
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="auto_make" id="grid-state">
                <option>Toyota</option>
                <option>Mercedes</option>
                <option>Chevrolette</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            </div>
            <div class="md:w-1/4 px-3 mb-6 md:mb-0">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-first-name">
                Auto Model
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="auto_model" value="{{old('auto_model')}}" id="grid-first-name" type="text" placeholder="Hillux">
            </div>
            <div class="md:w-1/4 px-3">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-last-name">
                Collision Type
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="collision_en" id="grid-state">
                <option value="1">Front Collision</option>
                <option value="3">Side Collision</option>
                <option value="2">Rear Collision</option>
                <option value="0">None</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            </div>
            <div class="md:w-1/4 px-3">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-last-name">
                Policy County
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="policy_county" id="grid-state">
                <option value="Nairobi">Nairobi</option>
                <option value="Nakuru">Nakuru</option>
                <option value="Eldoret">Eldoret</option>
                <option value="Kisumu">Kisumu</option>
                <option value="Meru">Meru</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            </div>
        </div>
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/4 px-3 mb-6 md:mb-0">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-first-name">
                Policy Deductable
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="policy_deductable" value="{{old('policy_deductable')}}" id="grid-first-name" type="text" placeholder="3000">
            </div>
            <div class="md:w-1/4 px-3 mb-6 md:mb-0">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-first-name">
                Insured Education Level
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="insured_education_level" id="grid-state">
                <option>Primary</option>
                <option>High School</option>
                <option>College</option>
                <option>Degree</option>
                <option>Masters</option>
                <option>PhD</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            </div>
            <div class="md:w-1/4 px-3">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-last-name">
                Incident County
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="incident_county" id="grid-state">
                <option>Nairobi</option>
                <option>Nakuru</option>
                <option>Eldoret</option>
                <option>Kisumu</option>
                <option>Meru</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            </div>
            <div class="md:w-1/4 px-3">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-last-name">
                Incident City
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" name="incident_city" value="{{old('incident_city')}}" id="grid-last-name" type="text" placeholder="Nairobi">
            </div>
        </div>
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/5 px-3 mb-6 md:mb-0">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-first-name">
                Incident Period of the Day
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="incident_period_of_the_day" id="grid-state">
                <option value="1">1hrs</option>
                <option value="2">2hrs</option>
                <option value="3">3hrs</option>
                <option value="4">4hrs</option>
                <option value="5">5hrs</option>
                <option value="6">6hrs</option>
                <option value="7">7hrs</option>
                <option value="8">8hrs</option>
                <option value="9">9hrs</option>
                <option value="10">10hrs</option>
                <option value="11">11hrs</option>
                <option value="12">12hrs</option>
                <option value="13">13hrs</option>
                <option value="14">14hrs</option>
                <option value="15">15hrs</option>
                <option value="16">16hrs</option>
                <option value="17">17hrs</option>
                <option value="18">18hrs</option>
                <option value="19">19hrs</option>
                <option value="20">20hrs</option>
                <option value="21">21hrs</option>
                <option value="22">22hrs</option>
                <option value="23">23hrs</option>
                <option value="24">24hrs</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            </div>
            <div class="md:w-1/5 px-3 mb-6 md:mb-0">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-first-name">
                Property Damage
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="property_damage" id="grid-state">
                <option value="1">Yes</option>
                <option value="2">No</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            </div>
            <div class="md:w-1/5 px-3">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-last-name">
                Incident Type
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="incident_type" id="grid-state">
                <option>Vehicle Theft</option>
                <option>Single Vehicle Collision</option>
                <option>Multi-vehicle Collision</option>
                <option>Parked Car</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            </div>
            <div class="md:w-1/5 px-3">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-last-name">
                Insured Occupation
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" name="insured_occupation" value="{{old('insured_occupation')}}" id="grid-last-name" type="text" placeholder="Doctor">
            </div>
            <div class="md:w-1/5 px-3">
            <label class="block tracking-wide text-grey-darker text-sm font-medium mb-2" for="grid-last-name">
                NO. of Vehicles Involved
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="number_of_vehicles_involved" id="grid-state">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">More than 10</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            </div>
        </div>
        <div class="flex justify-end items-center">
            <button type="submit" class="flex shadow-md pl-8 bg-indigo-800 hover:bg-indigo-700 text-white font-normal py-4 px-8">
            <span>Submit Claim</span>
            </button>
        </div>
        </div>
      </form>
    </div>
  </div>
</div>

  
  @endsection