@extends('Layouts.Admin')

@section('content')
    <x-form :route="route('hp-settings')">
        @include('Admin.Components.PageHeader', ['title' => 'Obecné nastavení domovoské stránky'])

        <input type="text" name="name" value="efef" />
        <input type="text" name="secondname" value="efef" />
        <button>Submit</button>
    </x-form>
@endsection
