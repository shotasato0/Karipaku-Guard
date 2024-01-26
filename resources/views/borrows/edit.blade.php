<x-main>
    {{-- <x-slot name="title">Karipaku Guard - Edit Borrow</x-slot> --}}

    <!-- モバイルビュー用の表示 -->
    <div class="sm:hidden">
        <div class="container mx-auto p-8">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:mx-8 lg:mx-32">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">登録情報の編集</h2>
                        <div class="overflow-hidden">
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
                                        class="block text-lg font-semibold text-gray-900">貸し主</label>
                                    <input type="text" name="friend_name" id="friend_name"
                                        value="{{ $borrow->friend->name }}"
                                        class="border rounded px-2 py-1 w-full mt-2">
                                </div>

                                <div class="bg-white p-4 border rounded-lg">
                                    <label for="item_name"
                                        class="block text-lg font-semibold text-gray-900">借りた物</label>
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

                                <x-update-button />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- デスクトップ用の表示 --}}

    <div class="hidden overflow-x-auto sm:block">
        <div class="container mx-auto p-6 lg:p-12">
            <h2 class="mb-4 text-2xl font-bold text-gray-800 dark:text-gray-200">登録情報の編集</h2>
            <div class="rounded-lg overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <form method="POST" action="{{ route('borrows.update', $borrow) }}" class="space-y-4">
                            @csrf
                            @method('PATCH')
                            <!-- ラベル行 -->
                            <thead class="bg-gray-100">
                                <tr>
                                    <th scope="col"
                                        class="whitespace-nowrap text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                        貸し主
                                    </th>
                                    <th scope="col"
                                        class="whitespace-nowrap text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                        借りた物
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
                                            value="{{ $borrow->friend->name }}"
                                            class="border rounded px-2 py-1 w-full">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="text" name="item_name" id="item_name"
                                            value="{{ $borrow->item_name }}" class="border rounded px-2 py-1 w-full">
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
                                    <x-update-button />
                                </tr>
                            </tbody>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-main>
