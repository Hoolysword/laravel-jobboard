<x-layout> 
    <x-slot:heading>Register</x-slot:heading>
    

<form method="POST" action="/register">
    @csrf


        <div  class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-field>
            <x-form-label for='firstName'>First Name</x-form-label>
            <div class="mt-2">
              <x-form-input name="firstName" id="firstName" required></x-form-input>
              <x-form-error name='firstName'></x-form-error>
            </div>
          
            </x-form-field>
        

        
          <x-form-field>
            <x-form-label for='lastName'>Last Name</x-form-label>
            <div class="mt-2">
              <x-form-input name="lastName" id="lastName"  required></x-form-input>
              <x-form-error name='lastName'></x-form-error>
            </div>
          
            </x-form-field>
       
      
            <x-form-field>
              <x-form-label for='email'>Email</x-form-label>
              <div class="mt-2">
                <x-form-input name="email" id="email"  required></x-form-input>
                <x-form-error name='email'></x-form-error>
              </div>
            
              </x-form-field>
        
            <x-form-field>
              <x-form-label for='password'>Password</x-form-label>
              <div class="mt-2">
                <x-form-input name="password" id="password"  required></x-form-input>
                <x-form-error name='password'></x-form-error>
              </div>
            
              </x-form-field>
          
         
            <x-form-field>
              <x-form-label for='password_confirmation'>Password Confirmation</x-form-label>
              <div class="mt-2">
                <x-form-input name="password_confirmation" id="password_confirmation"  required></x-form-input>
                <x-form-error name='password_confirmation'></x-form-error>
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
      <a href='/' class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
     <x-form-button>Register</x-form-button>
    </div>
  </form>
  
    </x-layout>