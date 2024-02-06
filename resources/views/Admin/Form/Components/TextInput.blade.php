<div class="flex flex-col w-full">
    <div class="ml-3">{{ $title ?? '' }}</div>
    <input {{$required ? 'form-require' : ''}} type="text" class="py-1 px-3 border-2 rounded-md text-d1" placeholder="{{ $placeholder ?? '' }}">
</div>
