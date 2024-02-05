@php
    use Ramsey\Uuid\Uuid;
    $unic = Uuid::uuid4();
@endphp

<div class="flex flex-col">
    <div class="ml-3">Obrázek</div>
    <div class="relative group">
        <img class="rounded-sm w-full h-60"
            src="https://img.freepik.com/free-photo/breakfast-wooden-table-with-natural-view_53876-139869.jpg?w=1060&t=st=1707069858~exp=1707070458~hmac=41085b3be76c119e7e3a3ee224e751342f029f757fb3058b3e3babd833ca20b2"
            alt="">
        <input id="{{ $unic }}image-uploader" type="file" class="hidden" accept="{{ $accept ?? '' }}">
        <label for="{{ $unic }}image-uploader"
            class="absolute opacity-0 top-0 left-0 w-full h-full bg-od1 text-l1 flex group-hover:opacity-100 justify-center items-center text-lg cursor-pointer">
            <span>Změnit</span>
        </label>
    </div>
</div>
