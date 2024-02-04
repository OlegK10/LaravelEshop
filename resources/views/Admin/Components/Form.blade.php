<form action="{{ $route }}" method="POST">
    @include('Admin.Components.FlashMessages')
    @csrf
    {{ $slot }}
</form>
