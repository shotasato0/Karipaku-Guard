<x-header>
    <x-slot name="title">Karipaku Guard - Edit Borrow</x-slot>
    <div class="container mx-auto p-8">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <form method="POST" action="{{ route('borrows.update', $borrow) }}">

                            @csrf
                            @method('PATCH')
                            @error('friend_name')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror

                            @error('friend_id')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror

                            @error('item_name')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror

                            @error('borrowed_at')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror

                            @error('trust_score')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror

                            <div class="mb-4">
                                 <!-- friend_idのための隠されたフィールド -->
                                <input type="hidden" name="friend_id" value="{{ $borrow->friend_id }}">
                                <label for="friend_name" class="block text-gray-700 text-sm font-bold mb-2">
                                    借りた人の名前
                                </label>
                                <input type="text" name="friend_name" id="friend_name"
                                    value="{{ $borrow->friend->name }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div class="mb-4">
                                <label for="item_name" class="block text-gray-700 text-sm font-bold mb-2">
                                    借りた物の名前
                                </label>
                                <input type="text" name="item_name" id="item_name" value="{{ $borrow->item_name }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div class="mb-4">
                                <label for="borrowed_at" class="block text-gray-700 text-sm font-bold mb-2">
                                    借りた日
                                </label>
                                <input type="date" name="borrowed_at" id="borrowed_at"
                                    value="{{ $borrow->borrowed_at->format('Y-m-d') }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div class="mb-4">
                                <label for="trust_score" class="block text-gray-700 text-sm font-bold mb-2">
                                    信頼度スコア
                                </label>
                                <input type="number" name="trust_score" id="trust_score"
                                    value="{{ $borrow->trust_score }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div class="flex items-center justify-between">
                                <button
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                    type="submit">
                                    更新
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-header>
