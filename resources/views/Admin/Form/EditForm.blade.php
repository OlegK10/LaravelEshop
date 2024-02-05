<div>
    <div class="mt-12 fixed w-full h-screen bg-l1">
        <form action="{{ route($route) }}">
            {{ $slot }}
        </form>
    </div>

    <button btn-show-edit-form class="rounded-full border-2 absolute p-4 hover:border-m hover:text-m "><i
            class="fa fa-pencil" aria-hidden="true"></i></button>
</div>
