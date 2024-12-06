<x-layout>
    <x-slot:heading>Edit Job: {{ $job->title }}</x-slot:heading>

    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')




        <div>
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new job </h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">We just need some informations</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                                <input type="text" name="title" value="{{ $job->title }}" id="title"
                                    autocomplete="title"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Shift Leader" required>
                            </div>
                        </div>
                    </div>






                </div>
                @error('title')
                    <p class="text-xs text-red-500"> {{ $message }}</p>
                @enderror
            </div>





            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                    <div class="mt-2">
                        <div
                            class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                            <input type="text" name="salary" value="{{ $job->salary }}" id="salary"
                                class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                placeholder="30000 per year" required>
                        </div>
                    </div>
                </div>

            </div>
            @error('salary')
                <p class="text-xs text-red-500"> {{ $message }}</p>
            @enderror
        </div>
        <div class="mt-6 flex items-center justify-between gap-x-6">
        <div class="flex items-center">
        <button type="submit" class="text-red-500 text-sm text-bold" form="delete-form">Delete</button>
        </div>
        <div >
            <a href="/jobs/{{ $job->id }}" type="button"
                class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
        </div>
        </div>
    </form>
    <form method="POST" action="/jobs/{{$job->id}}" class="hidden" id="delete-form">
      @csrf
      @method('DELETE')
    </div>

    {{--   @if ($errors->any())
      <ul>
        @foreach ($errors->all() as $error)
          <li> {{$error}} </li>
        @endforeach
    @endif --}}



</x-layout>
