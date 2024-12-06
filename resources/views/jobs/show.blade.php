<x-layout> 
<x-slot:heading>Job Page</x-slot:heading>
<h2 class="font-bold text-lg"> {{$job->title}}</h2>
<p> This job pays : {{$job->salary}}</p>
<p class="mt-6">
    @can('edit-jobs',$job)
    <x-button href="{{$job->id}}/edit">Edit Jobs </x-button>
    @endcan
   
</x-layout>