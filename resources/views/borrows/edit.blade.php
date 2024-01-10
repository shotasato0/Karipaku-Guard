<x-main>
    <x-slot name="title">Karipaku Guard - Edit Borrow</x-slot>

    <!-- モバイルビュー用の表示 -->
    <div class="sm:hidden">
        <div class="container mx-auto p-8">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:mx-8 lg:mx-32">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="flex flex-row justify-between">
                            <x-back-link />
                            <div class="mt-2">
                                <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">登録情報の編集</h2>
                            </div>
                        </div>

                        <div class="overflow-hidden rounded-lg">
                            <form method="POST" action="{{ route('borrows.update', $borrow) }}" class="space-y-4">
                                @csrf
                                @method('PATCH')

                                <!-- エラーメッセージ -->
                                @error('friend_name')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                                @error('item_name')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                                @error('borrowed_at')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                                @error('deadline')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror

                                <!-- 入力フィールド -->
                                <input type="hidden" name="friend_id" value="{{ $borrow->friend_id }}">

                                <div class="bg-white p-4 border rounded-lg">
                                    <label for="friend_name"
                                        class="block text-lg font-semibold text-gray-900">借りた人の名前</label>
                                    <input type="text" name="friend_name" id="friend_name"
                                        value="{{ $borrow->friend->name }}"
                                        class="border rounded px-2 py-1 w-full mt-2">
                                </div>

                                <div class="bg-white p-4 border rounded-lg">
                                    <label for="item_name"
                                        class="block text-lg font-semibold text-gray-900">借りた物の名前</label>
                                    <input type="text" name="item_name" id="item_name"
                                        value="{{ $borrow->item_name }}" class="border rounded px-2 py-1 w-full mt-2">
                                </div>

                                <div class="bg-white p-4 border rounded-lg">
                                    <label for="borrowed_at"
                                        class="block text-lg font-semibold text-gray-900">借りた日</label>
                                    <input type="date" name="borrowed_at" id="borrowed_at"
                                        value="{{ $borrow->borrowed_at->format('Y-m-d') }}"
                                        class="border rounded px-2 py-1 w-full mt-2">
                                </div>

                                <div class="bg-white p-4 border rounded-lg">
                                    <label for="deadline" class="block text-lg font-semibold text-gray-900">返却期限</label>
                                    <input type="date" name="deadline" id="deadline"
                                        @if ($borrow->deadline) value="{{ $borrow->deadline->format('Y-m-d') }}"
                                    @else
                                        value="{{ $borrow->deadline }}" @endif
                                        class="border rounded px-2 py-1 w-full mt-2">
                                </div>

                                <div class="pt-4">
                                    <button type="submit"
                                        class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">更新</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- デスクトップ用の表示 --}}

    <div class="overflow-x-auto hidden sm:block">
        <div class="container mx-auto p-6 lg:p-12">
            <div class="flex flex-row justify-between">
                <x-back-link />
                <div class="mt-2">
                    <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">登録情報の編集</h2>
                </div>
            </div>
            <table class="min-w-full">
                <form method="POST" action="{{ route('borrows.update', $borrow) }}" class="space-y-4">
                    @csrf
                    @method('PATCH')
                    <!-- ラベル行 -->
                    <thead class="bg-gray-100">
                        <tr>
                            <th scope="col"
                                class="whitespace-nowrap text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                借りた人の名前
                            </th>
                            <th scope="col"
                                class="whitespace-nowrap text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                借りた物の名前
                            </th>
                            <th scope="col"
                                class="whitespace-nowrap text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                借りた日
                            </th>
                            <th scope="col"
                                class="whitespace-nowrap text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                返却期限
                            </th>
                            <th scope="col"
                                class="whitespace-nowrap text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                更新
                            </th>
                        </tr>
                    </thead>
                    <!-- エラーメッセージ -->
                    @error('friend_name')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                    @error('item_name')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                    @error('borrowed_at')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                    @error('deadline')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                    <!-- 入力フィールド -->
                    <tbody>
                        <tr class="bg-white border-b">
                            <input type="hidden" name="friend_id" value="{{ $borrow->friend_id }}">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <input type="text" name="friend_name" id="friend_name"
                                    value="{{ $borrow->friend->name }}" class="border rounded px-2 py-1 w-full">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <input type="text" name="item_name" id="item_name" value="{{ $borrow->item_name }}"
                                    class="border rounded px-2 py-1 w-full">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <input type="date" name="borrowed_at" id="borrowed_at"
                                    value="{{ $borrow->borrowed_at->format('Y-m-d') }}"
                                    class="border rounded px-2 py-1 w-full">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <input type="date" name="deadline" id="deadline"
                                    @if ($borrow->deadline) value="{{ $borrow->deadline->format('Y-m-d') }}"
                            @else
                                value="{{ $borrow->deadline }}" @endif
                                    class="border rounded px-2 py-1 w-full">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button type="submit"
                                    class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">更新</button>
                            </td>
                        </tr>
                    </tbody>
                </form>
            </table>
        </div>
    </div>
</x-main>
