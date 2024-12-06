  <x-layout> 
      <x-slot:heading>Create Job Page</x-slot:heading>
      
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
  <form method="POST" action="/jobs">
      @csrf




      
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
          <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new job </h2>
          <p class="mt-1 text-sm leading-6 text-gray-600">We just need some informations</p>
        </div>
      </div>


          <div  class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <x-form-field>
              <x-form-label for='title'>Title</x-form-label>
              <div class="mt-2">
                <x-form-input name="title" id="title" placeholder="CEO" required></x-form-input>
                <x-form-error name='title'></x-form-error>
              </div>
            
              </x-form-field>
          </div>

          <div  class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <x-form-field>
              <x-form-label for='salary'>Salary</x-form-label>
              <div class="mt-2">
                <x-form-input name="salary" id="salary" placeholder="50000" required></x-form-input>
                <x-form-error name='salary'></x-form-error>
              </div>
            
              </x-form-field>
          </div>
          
        
      
      
        
      
      
      
    {{--   @if($errors->any())
        <ul>
          @foreach ($errors->all() as $error )
            <li> {{$error}} </li>
          @endforeach
      @endif --}}
      
      <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
       <x-form-button>Save</x-form-button>
      </div>
    </form>
    
      </x-layout>