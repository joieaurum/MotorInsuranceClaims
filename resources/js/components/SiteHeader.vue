<template>
  <header class="bg-gray-900 sm:flex sm:items-center sm:justify-between xl:bg-white">
    <div class="flex justify-between px-4 py-3 xl:w-72 xl:bg-gray-900 xl:justify-center xl:py-5">
      <div class="flex justify-between align-middle">
        <div>
          <svg width="40" height="40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.034 29l-9.067 5.833a5.75 5.75 0 01-5.934.2C1.167 34 0 32.067 0 29.933v-22.6A7.333 7.333 0 017.333 0H10.1A5.784 5.784 0 005 3.033a5.823 5.823 0 00.2 5.934l5.833 9.066 7 10.967z" fill="url(#paint0_linear)"/><path d="M11 18.033L5.166 8.967a5.75 5.75 0 01-.2-5.934C6 1.167 7.933 0 10.066 0h22.6A7.333 7.333 0 0140 7.333V10.1C40 7.967 38.833 6 36.967 5a5.824 5.824 0 00-5.934.2l-9.1 5.8L11 18.033z" fill="url(#paint1_linear)"/><path d="M21.967 11l9.066-5.834a5.75 5.75 0 015.934-.2C38.833 6 40 7.933 40 10.066v22.6A7.334 7.334 0 0132.667 40H29.9c2.133 0 4.1-1.167 5.1-3.034a5.824 5.824 0 00-.2-5.933l-5.833-9.067-7-10.966z" fill="url(#paint2_linear)"/><path d="M29 21.967l5.834 9.066a5.75 5.75 0 01.2 5.934C34 38.833 32.067 40 29.934 40h-22.6A7.333 7.333 0 010 32.667V29.9C0 32.033 1.167 34 3.033 35a5.824 5.824 0 005.934-.2l9.066-5.833 10.967-7z" fill="url(#paint3_linear)"/><defs><linearGradient id="paint0_linear" x1="-1.726" y1="3.889" x2="13.138" y2="29.901" gradientUnits="userSpaceOnUse"><stop stop-color="#78BEFF"/><stop offset="1" stop-color="#5463F8"/></linearGradient><linearGradient id="paint1_linear" x1="32.588" y1=".084" x2="9.278" y2="13.934" gradientUnits="userSpaceOnUse"><stop stop-color="#ADF7D8"/><stop offset="1" stop-color="#25BAAD"/></linearGradient><linearGradient id="paint2_linear" x1="40.647" y1="32.633" x2="25.107" y2="9.493" gradientUnits="userSpaceOnUse"><stop stop-color="#FFEF9C"/><stop offset="1" stop-color="#F8BD4F"/></linearGradient><linearGradient id="paint3_linear" x1="-.003" y1="30.977" x2="35.737" y2="30.977" gradientUnits="userSpaceOnUse"><stop stop-color="#F79788"/><stop offset="1" stop-color="#EF4A66"/></linearGradient></defs></svg>
        </div>
        <div>
          <span class="p-4 text-2xl font-bold text-white">eBimaPay</span>
        </div>
      </div>
      <div class="flex sm:hidden">
        <button @click="toggle" type="button" class="px-2 text-gray-500 hover:text-white focus:outline-none focus:text-white">
          <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path v-if="isOpen" fill-rule="evenodd" clip-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
            <path v-if="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
          </svg>
        </button>
      </div>
    </div>
    <nav class="sm:flex sm:items-center sm:px-4 xl:flex-1 xl:justify-between" :class="{ 'hidden': !isOpen, 'block': isOpen }">
      <div class="hidden xl:block xl:relative xl:max-w-xs xl:w-full">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
          <svg class="h-6 w-6 fill-current text-gray-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.32 14.9l1.1 1.1c.4-.02.83.13 1.14.44l3 3a1.5 1.5 0 0 1-2.12 2.12l-3-3a1.5 1.5 0 0 1-.44-1.14l-1.1-1.1a8 8 0 1 1 1.41-1.41l.01-.01zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
        </div>
        <input class="block w-full border border-transparent bg-gray-200 focus:outline-none focus:bg-white focus:border-gray-300 text-gray-900 rounded-lg pl-10 pr-4 py-2" placeholder="Search by keywords">
      </div>
      <div class="sm:flex sm:items-center">
        <div class="px-2 pt-2 pb-5 border-b border-gray-800 sm:flex sm:border-b-0 sm:py-0 sm:px-0">
          <a href="#" class="block px-3 py-1 rounded font-semibold text-white hover:bg-gray-800 sm:text-sm sm:px-2 xl:text-gray-900 xl:hover:bg-gray-200">Claims</a>
          <a href="#" class="mt-1 block px-3 py-1 rounded font-semibold text-white hover:bg-gray-800 sm:mt-0 sm:text-sm sm:px-2 sm:ml-2 xl:text-gray-900 xl:hover:bg-gray-200">Transactions</a>
          <a href="#" class="mt-1 block px-3 py-1 rounded font-semibold text-white hover:bg-gray-800 sm:mt-0 sm:text-sm sm:px-2 sm:ml-2 xl:text-gray-900 xl:hover:bg-gray-200">Messages</a>
        </div>
        <div class="relative px-5 py-5 sm:py-0 sm:ml-4 sm:px-0">
          <div class="flex items-center sm:hidden">
            <img class="h-10 w-10 object-cover rounded-full border-2 border-gray-600" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="">
            <span class="ml-4 font-semibold text-gray-200 sm:hidden">Isla Schoger</span>
          </div>
          <div class="mt-5 sm:hidden">
            <a href="#account" class="block text-gray-400 hover:text-white">Account settings</a>
            <a href="#support" class="mt-3 block text-gray-400 hover:text-white">Support</a>
            <a href="/logout" class="mt-3 block text-gray-400 hover:text-white">Sign out</a>
          </div>
          <Dropdown class="hidden sm:block">
            <template #trigger="{ hasFocus, isOpen }">
              <span class="block h-8 w-8 overflow-hidden rounded-full border-2 "
                :class="[(hasFocus || isOpen) ? 'border-white xl:border-indigo-500' : 'border-gray-600 xl:border-gray-300']"
              >
                <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="">
              </span>
            </template>
            <template #dropdown>
              <div class="mt-3 bg-white xl:border rounded-lg w-48 py-2 shadow-xl">
                <a href="#account" class="block hover:text-white text-gray-800 px-4 py-2 hover:bg-indigo-500">Account settings</a>
                <a href="#support" class="block hover:text-white text-gray-800 mt-0 px-4 py-2 hover:bg-indigo-500">Support</a>
                <a href="/logout" class="block hover:text-white text-gray-800 mt-0 px-4 py-2 hover:bg-indigo-500">Sign out</a>
              </div>
            </template>
          </Dropdown>
        </div>
      </div>
    </nav>
  </header>
</template>

<script>
import Dropdown from './../components/Dropdown.vue'

export default {
  components: { Dropdown },
  props: [],
  data() {
    return {
      isOpen: false,
    }
  },
  methods: {
    toggle() {
      this.isOpen = !this.isOpen
    },
  },
}
</script>
