<x-main>
    <x-slot name="title">{{ $borrow }} - Karipaku Guard</x-slot>

    <!-- モバイルビュー用のカード表示 -->
    <div class="sm:hidden">
        <div class="container px-4 md:px-10">
            <div class="flex flex-row justify-between">
                <x-back-link />
                <div class="mt-2">
                    <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">貸し主の情報</h2>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-5 md:p-8">
                <h1 class="text-3xl font-bold mb-6">
                    {{ $borrow->friend->name }}
                </h1>
                <div class="space-y-4">
                    <div>
                        <h2 class="font-bold">年齢:</h2>
                        <p>{{ $borrow->friend->age ?? '未登録' }}</p>
                    </div>
                    <div>
                        <h2 class="font-bold">性別:</h2>
                        <p>{{ $borrow->friend->gender ?? '未登録' }}</p>
                    </div>
                    <div>
                        <h2 class="font-bold">電話番号:</h2>
                        <p>{{ $borrow->friend->phone ?? '未登録' }}</p>
                    </div>
                    <div>
                        <h2 class="font-bold">Email:</h2>
                        <p>{{ $borrow->friend->email ?? '未登録' }}</p>
                    </div>
                    <div>
                        <h2 class="font-bold">住所:</h2>
                        <p>{{ $borrow->friend->address ?? '未登録' }}</p>
                    </div>
                    <div>
                        <h2 class="font-bold">あなたとの関係:</h2>
                        <p>{{ $borrow->friend->relationship_type ?? '未登録' }}</p>
                    </div>
                </div>
                <a href="{{ route('friends.edit', $borrow) }}"
                    class="py-2 bg-blue-500 hover:bg-blue-700 text-white mt-10 font-bold rounded inline-block align-middle text-center"
                    style="line-height: normal; height: 38px; width: 80px;">
                    編集
                </a>
            </div>
        </div>
    </div>

    {{-- デスクトップ用の表示 --}}
    <div class="hidden sm:block">
        <body class="bg-gray-100">
            <div class="container px-4 md:px-10">
                <div class="flex flex-row justify-between">
                    <x-back-link />
                    <div class="mb-4">
                        <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">貸し主の情報</h2>
                    </div>
                </div>
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
                                    <td class="border whitespace-nowrap px-4 py-2">{{ $borrow->friend->age ?? '未登録' }}
                                    </td>
                                    <td class="border whitespace-nowrap px-4 py-2">
                                        {{ $borrow->friend->gender ?? '未登録' }}
                                    </td>
                                    <td class="border whitespace-nowrap px-4 py-2">
                                        {{ $borrow->friend->phone ?? '未登録' }}
                                    </td>
                                    <td class="border whitespace-nowrap px-4 py-2">
                                        {{ $borrow->friend->email ?? '未登録' }}
                                    </td>
                                    <td class="border whitespace-nowrap px-4 py-2">
                                        {{ $borrow->friend->address ?? '未登録' }}
                                    </td>
                                    <td class="border whitespace-nowrap px-4 py-2">
                                        {{ $borrow->friend->relationship_type ?? '未登録' }}</td>
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
    </div>
</x-main>
