{{-- Link cdn --}}
@include('Client.includes.head')
{{-- End link cdn --}}

{{-- Header (nav) --}}
@include('Client.includes.header')
{{-- End header (nav) --}}

{{-- Body --}}
@yield('main')
{{-- End body --}}

{{-- footer --}}
@include('Client.includes.footer')
{{-- end footer --}}