<x-layout> 
<x-slot:heading>Jobs Page</x-slot:heading>
<ul>
@foreach ($jobs as $job)
   <div class="space-y-4"> 
    <a href ="/jobs/{{$job['id']}} "class="block px-4 py-6 border-grey-200 rounded-lg">
        <div class="font-bold text-blue-500"> {{$job->employer->name}} </div>
    <strong> {{$job['title']}}: </strong> Pays {{$job['salary']}} per year</li>
    </a>
@endforeach
    <div>
        {{$jobs->links()}}
    </div>
</div>
</x-layout>