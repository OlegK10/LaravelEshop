@php
    use App\Enums\FlashMessagesEnum as errorType;

    $error = errorType::ERROR->value;
    $success = errorType::SUCCESS->value;
    $warn = errorType::WARN->value;
    $warn_confirm = errorType::WARN_CONFIRM->value;
@endphp

@if (session()->has($error))
    <div flash-timeout="{{ session($error)->displayTime }}"
        class="fixed -top-full shadow-red shadow-sm left-0 transform right-0 z-50 mx-auto w-96  mt-3 rounded-xl overflow-hidden text-theme-1">

        <div class="w-full flex justify-between p-3 items-center bg-gradient-to-b from-red to-theme-1">
            <div class="bg-theme-1 text-red py-1 text-lg px-6 rounded-full">{{ session($error)->title }}</div>
            <div class="text-rev-theme-1">#{{ session($error)->code }}</div>
        </div>

        <div class="bg-theme-1 text-rev-theme-1 p-3">{{ session($error)->message }}</div>
    </div>
@endif


@if (session()->has($success))
    <div flash-timeout="{{ session($success)->displayTime }}"
        class="fixed -top-full shadow-green shadow-sm left-0 transform right-0 z-50 mx-auto w-96  mt-3 rounded-xl overflow-hidden text-theme-1">

        <div class="w-full p-3 bg-gradient-to-b from-green to-theme-1 text-center">
            <div class="bg-theme-1 text-lg text-green py-1 rounded-full">{{ session($success)->title }}</div>
        </div>
    </div>
@endif


@if (session()->has($warn))
    <div flash-timeout="{{ session($warn)->displayTime }}"
        class="fixed -top-full shadow-orange shadow-sm left-0 transform right-0 z-50 mx-auto w-96  mt-3 rounded-xl overflow-hidden text-theme-1">

        <div class="w-full flex justify-center p-3 items-center bg-gradient-to-b from-orange to-theme-1">
            <div class="bg-theme-1 text-lg text-orange py-1 px-6 rounded-full">{{ session($warn)->title }}</div>
        </div>

        <div class="bg-theme-1 text-rev-theme-1 p-3">{{ session($warn)->message }}</div>
    </div>
@endif


@if (session()->has($warn_confirm))
    <div flash-onclick-close = "{{ session($warn_confirm)->formSubmitId}}"
        class="fixed -top-full shadow-orange shadow-sm left-0 transform right-0 z-50 mx-auto w-96  mt-3 rounded-xl overflow-hidden text-theme-1">

        <div class="w-full flex justify-between p-3 items-center bg-gradient-to-b from-orange to-theme-1">
            <div class="bg-theme-1 text-orange py-1 text-lg px-6 rounded-full">{{ session($warn_confirm)->title }}</div>
        </div>

        <div class="flex bg-theme-1 text-rev-theme-1 p-3 items-center gap-1 justify-between">
            <div class="">{{ session($warn_confirm)->message }}</div>
            <div class="flex gap-1">
                <button btn-flash-confirm class="bg-green w-10 h-10 rounded-full shadow-in hover:opacity-75 hover:scale-95"><i class="fa fa-check" aria-hidden="true"></i></button>
                <button btn-flash-disagree class="bg-red w-10 h-10 rounded-full shadow-in hover:opacity-75 hover:scale-95"><i class="fa-solid fa-xmark"></i></button>
            </div>
        </div>
    </div>
@endif
