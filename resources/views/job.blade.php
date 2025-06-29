<x-layout title="Job Details">

<h2>{{ $job['title'] }}</h2>
<p>Company: {{ $job['company'] }}</p>

<a href="{{ url('jobs') }}">Back to Jobs</a>
</x-layout>