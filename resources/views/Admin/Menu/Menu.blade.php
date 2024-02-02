<div class="w-full">
    <div class="flex justify-between py-2 px-4 bg-theme-2 rounded-full">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <div>👻</div>
    </div>

    <div class="mt-5">
        <div>
            <button menu-parent
                class="flex justify-between items-center py-1 px-4 hover:bg-theme-2 rounded-lg rounded-b-none  w-full text-left">
                <div>Homepage</div>
                <div>↓</div>
            </button>
            <div menu-childs class="overflow-hidden text-sm pl-2 bg-theme-2 h-0">
                <a href="{{route('hp-settings')}}" class="flex justify-between items-center py-1 px-4 hover:bg-theme-2 rounded-full hover:text-main">Obecné nastavení</a>
                <a class="flex justify-between items-center py-1 px-4 hover:bg-theme-2 rounded-full hover:text-main">Aktivity</a>
                <a class="flex justify-between items-center py-1 px-4 hover:bg-theme-2 rounded-full">Popis</a>
                <a class="flex justify-between items-center py-1 px-4 hover:bg-theme-2 rounded-full">Vybavení</a>
                <a class="flex justify-between items-center py-1 px-4 hover:bg-theme-2 rounded-full">Ukázka</a>
                <a class="flex justify-between items-center py-1 px-4 hover:bg-theme-2 rounded-full">Recenze</a>
            </div>
        </div>

    </div>
</div>
