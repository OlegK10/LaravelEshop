<div>
    <div edit-form class="fixed top-0 left-0 bg-od1 h-screen w-full z-50 backdrop-blur-sm hidden">
        <div class="absolute w-128 top-16 rounded-md left-0 right-0 mx-auto bg-l1 ">

            @include('Front.Components.EditForm.Title', ['title' => 'Editace Preview'])

            <form action="/action" class="flex flex-col gap-4 max-h-96 overflow-y-scroll px-5">
                @csrf

                @include('Front.Components.EditForm.TextInput', [
                    'title' => 'Nadpis',
                    'placeholder' => 'Nadpis',
                    'required' => true,
                ])

                @include('Front.Components.EditForm.TextArea', [
                    'title' => 'Popis',
                    'placeholder' => 'Popis',
                    'required' => true,
                ])

                @include('Front.Components.EditForm.TextInput', [
                    'title' => 'Tlačítko',
                    'placeholder' => 'Tlačítko',
                    'required' => true,
                ])

                @include('Front.Components.EditForm.Uploader', [
                    'title' => 'Obrázek',
                    'required' => true,
                    'accept' => 'image/png',
                ])

                @include('Front.Components.EditForm.Buttons')
            </form>
        </div>
    </div>



    <button btn-show-edit-form class="rounded-full border-2 absolute p-4 hover:border-m hover:text-m "><i
            class="fa fa-pencil" aria-hidden="true"></i></button>
</div>
