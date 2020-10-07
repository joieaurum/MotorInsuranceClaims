@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-8">
  <div class="py-8">
    <div>
      <h2 class="text-4xl font-semibold leading-tight">Claims</h2>
    </div>

    <div class="flex justify-end items-center">
      <a href="/claims/create">
        <button class="flex shadow-md pl-8 bg-indigo-800 hover:bg-indigo-700 text-white font-normal py-4 px-8">
          <span>Submit Claim</span>
        </button>
      </a>
    </div>
    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
      <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
        <table class="min-w-full leading-normal">
          <thead>
            <tr>
              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Car / Invoice
              </th>
              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Claim Amount
              </th>
              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Incident
              </th>
              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Reported Date
              </th>
              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Status
              </th>
              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"></th>
            </tr>
          </thead>
          <tbody>
          @foreach ($claims as $claim)
            <tr>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <div class="flex">
                  <div class="flex-shrink-0 w-10 h-10">
                    <img class="w-full h-full rounded-full" src="/img/images.png"/>
                  </div>
                  <div class="ml-3">
                    <p class="text-gray-900 whitespace-no-wrap">
                    {{ $claim->auto_make }}
                    </p>
                    <p class="text-gray-600 whitespace-no-wrap">{{ $claim->auto_model }}</p>
                  </div>
                </div>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">{{ $claim->total_claim_amount }}</p>
                <p class="text-gray-600 whitespace-no-wrap">KSH</p>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">{{ $claim->incident_type }}</p>
                <p class="text-gray-600 whitespace-no-wrap">{{ $claim->incident_severity }}</p>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">{{ $claim->created_at->diffForHumans() }}</p>
                <!-- <p class="text-gray-600 whitespace-no-wrap">Due in 3 days</p> -->
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                  <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                  <span class="relative">{{ $claim->status }}</span>
                </span>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                <button type="button" class="inline-block text-gray-500 hover:text-gray-700">
                  <svg class="inline-block h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z"/>
                  </svg>
                </button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
