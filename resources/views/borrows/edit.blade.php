<x-main>
    <x-slot name="title">Karipaku Guard - Edit Borrow</x-slot>
    <div class="container mx-auto p-8">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:mx-8 lg:mx-32">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="flex flex-row justify-between">
                        <x-back-link />
                        <div class="mb-4">
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
                                    value="{{ $borrow->friend->name }}" class="border rounded px-2 py-1 w-full mt-2">
                            </div>

                            <div class="bg-white p-4 border rounded-lg">
                                <label for="item_name" class="block text-lg font-semibold text-gray-900">借りた物の名前</label>
                                <input type="text" name="item_name" id="item_name" value="{{ $borrow->item_name }}"
                                    class="border rounded px-2 py-1 w-full mt-2">
                            </div>

                            <div class="bg-white p-4 border rounded-lg">
                                <label for="borrowed_at" class="block text-lg font-semibold text-gray-900">借りた日</label>
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
</x-main>
