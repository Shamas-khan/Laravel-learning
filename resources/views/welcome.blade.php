<h1>our first page</h1>

{{-- <a href="/post">go to post page</a> --}}
<br>
<br>
<br>
{{-- <a href="{{route('about')}}">go to name route</a> --}}


{{-- php vs blade  --}}
<?php 
echo "hello";
?>

{{"hello"}}



<?php 
$name =10;
echo $name;
?>


@php
    $name1 = 11;
@endphp
{{
$name1}}


<?php
echo "<h1>our  page</h1>";
?>

{!!"<h1>our  bladre</h1> "!!}


    {{-- This is an escaped Blade comment --}}


    @php
    $a = 11;
    $b =1;
@endphp

    @if ($a > $b)
    {{"hello"}}
    @else
    {{"no"}}
    @endif


    @switch($a=1)
        @case(1)
        {{"shams"}}
            @break
    
        @default
        {{"none"}}
    @endswitch

    @isset($a)
    {{"a me value hai"}}
    @endisset
    
    @empty($a)
    {{"a me ni value hai"}}
    @endempty

    @for ($a = 1; $a < 10 ; $a++)
    {{$a}}
    @endfor

    
    
    {{-- @for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor --}}

{{-- @foreach ($users as  $user)
<p></p>    
@endforeach --}}

{{-- @forelse ($users as $user )
    <li>{{$user->name}}</li>
@empty
    <li>no user</li>
    
@endforelse --}}