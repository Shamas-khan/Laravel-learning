@php
    $fruits =["apple","banna","graps"];
    $stu =[1,213,23,23];
@endphp

@include('pages.header',['name'=>'khan','frutes'=>$fruits,'stu' => $stu])
{{-- @includeWhen($stu,'pages.header',['name'=>'khan','frutes'=>$fruits,'stu' => $stu]) 
@includeUnless($stu,'pages.header',['name'=>'khan','frutes'=>$fruits,'stu' => $stu] ) --}}
<h1>our first page</h1>

@include('pages.footer')
@includeIf('pages.contact')

{{-- <a href="/post">go to post page</a> --}}
<br>
<br>
<br>
{{-- <a href="{{route('about')}}">go to name route</a> --}}


{{-- php vs blade  --}}
{{-- 
{{"hello"}}






@php
    $name1 = 11;
@endphp
{{
$name1}}



{!!"<h1>our  bladre</h1> "!!}


    {{-- This is an escaped Blade comment --}}


    {{-- @php
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

     --}}
   
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

{{-- {{5+10}}

<br>
<br>
{{"heelo world"}}
<br>
<br>
{{"<h1>blade html</h1>"}}
{!!"<h1>blade html</h1>"!!}

{{--   this is commnets--}}



 


{{-- 
@php
    $user = "shamas";
    $names = ["shamas khan", "fras0", "khans",12,232,334,34534,353453,232]; 
    $username = "main hu";
@endphp --}}

{{-- {{$user}} --}}

{{-- @{{$username}} --}}
{{-- <ul>
    @foreach ($names as $name)
@if ($loop->first)
<li style="color: red">{{$name}}</li>
@elseif ($loop->last)
<li style="color: green">{{$name}}</li>
@else
{{$loop->remaining}} --}}
{{-- <li > index {{$loop->index}}--itration{{$loop->iteration}} --value-{{$name}}</li>

@endif
       
    @endforeach --}}
{{-- </ul>  --}}





