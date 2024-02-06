@if (isAdmin())
    <div edit-form class="fixed top-12 -left-full w-128 h-screen bg-l1 z-60 shadow pb-10 pt-4">
        <div class="overflow-y-scroll  px-4 h-full pb-4">
            <button btn-close-edit-form
                class="absolute right-0 translate-x-1/2 p-4 rounded-full text-lx hover:bg-d1 bg-d2 text-l1 border-1 cursor-pointer">
                <i class="fa fa-arrow-left " aria-hidden="true"></i>
            </button>
            <form action="{{ route($route) }}">
                {{ $slot }}
                <div class="w-full flex items-center justify-center mt-2 text-l1 pb-5 ">
                    <button btn-submit-form
                        class="text-center bg-green py-2 px-16 shadow-in  rounded-full hover:opacity-75 hover:px-32">
                        <div>Uložit</div>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <button btn-show-edit-form class="rounded-full border-2 absolute p-4 hover:border-m hover:text-m "><i
            class="fa fa-pencil" aria-hidden="true"></i></button>
@endif
