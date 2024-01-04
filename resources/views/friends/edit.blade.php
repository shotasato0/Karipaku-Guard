<x-main>
    <x-slot name="title" class="text-2xl font-bold my-4">{{ $borrow }} - Karipaku Guard</x-slot>

    <body class="bg-gray-100">
        <div class="container mx-auto p-4">
            <div class="overflow-x-auto">
                <div class="py-4 inline-block min-w-full sm:px-4 lg:px-6">
                    <a href="{{ route('borrows.friend', $borrow->id) }}"
                        class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold my-2 py-2 px-4 rounded transition duration-300 ">
                        &laquo; 戻る
                    </a>
                    <div class="overflow-hidden rounded-lg">
                        <h1 class="bg-white text-3xl font-bold px-4 py-6">
                            {{ $borrow->friend->name }}
                        </h1>
                        <form method="POST" action="{{ route('friends.update', ['friend' => $borrow->friend->id]) }}"
                            class="bg-white">
                            @csrf
                            @method('PATCH')
                            <table class="min-w-full bg-white rounded-lg">
                                <thead class="bg-gray-200">
                                    <tr>
                                        <th
                                            class="whitespace-nowrap text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                            年齢</th>
                                        <th
                                            class="whitespace-nowrap text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                            性別</th>
                                        <th
                                            class="whitespace-nowrap text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                            電話番号</th>
                                        <th
                                            class="whitespace-nowrap text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                            Email</th>
                                        <th
                                            class="whitespace-nowrap text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                            住所</th>
                                        <th
                                            class="whitespace-nowrap text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                            あなたとの関係</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <!-- 年齢のプルダウンメニュー -->
                                            <select name="age" class="border rounded pr-6 py-1 w-full   ">
                                                @for ($i = 18; $i <= 100; $i++)
                                                    <option value="{{ $i }}"
                                                        {{ $borrow->friend->age == $i ? 'selected' : '' }}>
                                                        {{ $i }}</option>
                                                @endfor
                                            </select>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <!-- 性別のプルダウンメニュー -->
                                            <select name="gender" class="border rounded pr-6 py-1 w-full">
                                                <option value="男性"
                                                    {{ $borrow->friend->gender == '男性' ? 'selected' : '' }}>男性
                                                </option>
                                                <option value="女性"
                                                    {{ $borrow->friend->gender == '女性' ? 'selected' : '' }}>女性
                                                </option>
                                                <option value="指定なし"
                                                    {{ $borrow->friend->gender == '指定なし' ? 'selected' : '' }}>指定なし
                                                </option>
                                            </select>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <input type="text" name="phone" value="{{ $borrow->friend->phone }}"
                                                placeholder="電話番号" class="border rounded px-2 py-1 lg:w-full" />
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <input type="email" name="email" value="{{ $borrow->friend->email }}"
                                                placeholder="Email" class="border rounded px-2 py-1 lg:w-full" />
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <input type="text" name="address" value="{{ $borrow->friend->address }}"
                                                placeholder="住所" class="border rounded px-2 py-1 lg:w-full" />
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <input type="text" name="relationship_type"
                                                value="{{ $borrow->friend->relationship_type }}" placeholder="あなたとの関係"
                                                class="border rounded px-2 py-1 lg:w-full" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="px-6 py-4">
                                <button type="submit"
                                    class="bg-green-500 hover:bg-blue-700 text-white font-bold px-2 py-2 rounded">
                                    変更を保存
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-main>
