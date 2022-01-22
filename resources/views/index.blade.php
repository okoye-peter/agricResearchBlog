<x-layout-component title="Home">
    <x-slot name="styles">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    </x-slot>


    <x-slot name="scripts">
        <!-- Owl Carousel Js -->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    </x-slot>
</x-layout-component>