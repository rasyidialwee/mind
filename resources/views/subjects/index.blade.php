<a href="{{route('subjects.create')}}">
    Create New Subject
</a>

@foreach ($subjects as $subject)

<p>==========================</p>
<a href="{{route('subjects.edit',$subject)}}">Edit</a>

<h1>{{$subject->name}} ({{$subject->score}})</h1>
<p>{{$subject->description}}</p>
<small>{{$subject->status}}</small>
<p>==========================</p>

@endforeach

{{ $subjects->links() }}

{{-- @for ($x=0; $x<10; $x++)

<p>==========================</p>
<h1>Nama (score)</h1>
<p>Description</p>
<small>Status</small>
<p>==========================</p>

@endfor --}}
