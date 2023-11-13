<x-header>
    <x-slot name="title">{{ $friend }} - Karipaku Guard</x-slot>

    <body class="bg-gray-100">
        <div class="container mx-auto px-4 md:px-0">
            <div class="bg-white rounded-lg shadow-lg p-5 md:p-8 my-10">
                <a href="/"
                    class="mb-5 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">
                    &laquo; Back
                </a>
                <h1 class="text-3xl font-bold mb-6">
                    {{ $friend->name }}
                </h1>
                @if ($friend->is_active)
                    <p>This friend is active.</p>
                @else
                    <p>This friend is inactive.</p>
                @endif
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">年齢</th>
                            <th class="px-4 py-2">性別</th>
                            <th class="px-4 py-2">電話番号</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">住所</th>
                            <th class="px-4 py-2">あなたとの関係</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">{{ $friend->age }}</td>
                            <td class="border px-4 py-2">{{ $friend->gender }}</td>
                            <td class="border px-4 py-2">{{ $friend->phone }}</td>
                            <td class="border px-4 py-2">{{ $friend->email }}</td>
                            <td class="border px-4 py-2">{{ $friend->address }}</td>
                            <td class="border px-4 py-2">{{ $friend->relationship_type }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</x-header>
