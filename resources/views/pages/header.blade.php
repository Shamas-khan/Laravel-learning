<h1>
    header page
</h1>

<p>{{$name}}</p>

@foreach ($frutes as $frute )

<li>{{$frute}}</li>
    
@endforeach

@forelse ($stu as $s )
    <li>{{$s}}</li>
@empty
    <li>no value found</li>
@endforelse