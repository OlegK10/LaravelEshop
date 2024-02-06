<x-form :route="'hp-settings'">
    <div class="flex flex-col gap-4 items-center w-full">
        @include('Admin.Form.Components.TextInput', [
            'title' => 'Nadpis',
            'placeholder' => 'Nadpis',
            'required' => true,
        ])

        @include('Admin.Form.Components.TextArea', [
            'title' => 'Popis',
            'placeholder' => 'Popis',
            'required' => true,
        ])

        @include('Admin.Form.Components.TextInput', [
            'title' => 'Tlačítko',
            'placeholder' => 'Tlačítko',
            'required' => true,
        ])

        @include('Admin.Form.Components.Uploader', [
            'title' => 'Obrázek',
            'required' => true,
            'accept' => 'image/png',
        ])
    </div>
</x-form>
