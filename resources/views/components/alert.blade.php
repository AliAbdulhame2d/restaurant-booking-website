@if (session()->has('success'))

<div x-data ="{ show: true}" x-show="show" 
x-transition:enter="transition ease-out duration-1000"
x-transition:enter-start="opacity-0 translate-y-2"
x-transition:enter-end="opacity-100 translate-y-0"
x-transition:leave="transition ease-in duration-1000"
x-transition:leave-start="opacity-100 translate-y-0"
x-transition:leave-end="opacity-0 translate-y-2"

class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mb-2 rounded relative" role="alert">
    <span class="block sm:inline">{{session()->get('success')}}</span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
      <button @click="show = false"> <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg></button>
    </span>
  </div>

@endif