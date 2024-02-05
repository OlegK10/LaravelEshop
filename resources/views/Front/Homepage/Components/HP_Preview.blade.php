<div class="bg-l1 p-5 text-d1">

    @auth
        @include('Front.Homepage.Forms.EditHPPreview')
    @endauth


    <div class="text-lg flex justify-between ">
        <div class="max-w-screen-lgx w-full flex flex-col justify-start items-center gap-12">
            <div class="text-2xl text-center font-light border-b-1">About us</div>

            <div class="max-w-screen-slm text-base text-center leading-7">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet optio facere reiciendis, eaque animi quas!
                Dolor temporibus esse maiores possimus eligendi consequatur aperiam vero, deserunt veniam a qui. Itaque,
                fuga! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur nisi quia hic doloremque.
                Eligendi non ullam placeat assumenda itaque inventore fugiat. Numquam minus cupiditate dolorum veritatis
                laudantium omnis laborum optio.
            </div>

            <a href="#" class="border-x-2 px-4 hover:border-m hover:text-m rounded-full">Další informace</a>
        </div>

        <div
            class="bg-[url('https://img.freepik.com/free-photo/breakfast-wooden-table-with-natural-view_53876-139869.jpg?w=1060&t=st=1707069858~exp=1707070458~hmac=41085b3be76c119e7e3a3ee224e751342f029f757fb3058b3e3babd833ca20b2')]
            bg-center
            bg-cover
            rounded-lg
            w-ml h-96">
        </div>
    </div>
</div>
