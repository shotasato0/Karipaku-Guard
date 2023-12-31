<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.partials.head')
@section('title', config('app.name', 'Laravel'))

<body class="font-sans antialiased">
    @include('layouts.partials.header')
    <div class="min-h-three-quarters bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        {{-- @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif --}}

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    @include('layouts.partials.footer')
</body>

</html>
