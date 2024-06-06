{{-- Link cdn --}}
@include('Admin.includes.head')
{{-- End link cdn --}}

{{-- Header (nav) --}}
@include('Admin.includes.aside')
{{-- End header (nav) --}}

{{-- Body --}}
@yield('adminMain')
{{-- End body --}}

{{-- footer --}}
@include('Admin.includes.footer')
{{-- end footer --}}