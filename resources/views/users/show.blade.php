<x-header>
    <x-slot name="title">{{ $user }} - Karipaku Guard</x-slot>
    <body class="bg-gray-100">
        <div class="container mx-auto px-4 md:px-0">
            <div class="bg-white rounded-lg shadow-lg p-5 md:p-8 my-10">
                <a href="/" class="mb-5 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">
                    &laquo; Back
                </a>
                <h1 class="text-3xl font-bold mb-6">
                    {{ $user }}
                </h1>
                <!-- 他のコンテンツをここに追加 -->
            </div>
        </div>
    </body>
</x-header>