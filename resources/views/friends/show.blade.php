<x-main>
    <x-slot name="title">{{ $borrow }} - Karipaku Guard</x-slot>

    <body class="bg-gray-100">
        <div class="container px-4 md:px-10">
            <x-back-link />
            <div class="bg-white rounded-lg shadow-lg p-5 md:p-8">
                <h1 class="text-3xl font-bold mb-6">
                    {{ $borrow->friend->name }}
                </h1>
                <div class="flex justify-between overflow-x-auto">
                    <table class="min-w-full">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="px-4 py-2  whitespace-nowrap">年齢</th>
                                <th class="px-4 py-2  whitespace-nowrap">性別</th>
                                <th class="px-4 py-2  whitespace-nowrap">電話番号</th>
                                <th class="px-4 py-2  whitespace-nowrap">Email</th>
                                <th class="px-4 py-2  whitespace-nowrap">住所</th>
                                <th class="px-4 py-2  whitespace-nowrap">あなたとの関係</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border whitespace-nowrap px-4 py-2">{{ $borrow->friend->age ?? '未登録' }}</td>
                                <td class="border whitespace-nowrap px-4 py-2">{{ $borrow->friend->gender ?? '未登録' }}</td>
                                <td class="border whitespace-nowrap px-4 py-2">{{ $borrow->friend->phone ?? '未登録' }}</td>
                                <td class="border whitespace-nowrap px-4 py-2">{{ $borrow->friend->email ?? '未登録' }}</td>
                                <td class="border whitespace-nowrap px-4 py-2">{{ $borrow->friend->address ?? '未登録' }}</td>
                                <td class="border whitespace-nowrap px-4 py-2">{{ $borrow->friend->relationship_type ?? '未登録' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="{{ route('friends.edit', $borrow) }}"
                    class="py-2 bg-blue-500 hover:bg-blue-700 text-white mt-10 font-bold rounded inline-block align-middle text-center"
                    style="line-height: normal; height: 38px; width: 80px;">
                    編集
                </a>
            </div>
        </div>
    </body>
</x-main>
