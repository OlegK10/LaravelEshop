@extends('Layouts.Front')
<div
    class="bg-[url('https://img.freepik.com/free-photo/type-entertainment-complex-popular-resort-with-pools-water-parks-turkey-with-more-than-5-million-visitors-year-amara-dolce-vita-luxury-hotel-resort-tekirova-kemer_146671-18728.jpg?w=1060&t=st=1707065747~exp=1707066347~hmac=92777e7359f52fe1c27a75273583cc1c11f4ab1b48328ddb7dbf2be642c954df')]
    h-screen
    w-full
    bg-cover
    bg-center
    fixed
    -z-50
    brightness-50">
</div>

<div class="h-screen flex items-center justify-center w-full -z-50 fixed text-white text-6xl font-mayor font-light tracking-widest">
    <div>Fitfun</div>
</div>
<div class="h-screen"></div>

@section('content')
    <div class="">
        @include('Front.Homepage.Components.HP_Preview')
    </div>
@endsection
