<x-main>
    <x-slot name="title" class="text-2xl font-bold my-4">Karipaku Guard</x-slot>
    <div class="container mx-auto p-12">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <x-back-link />
                    <div class="overflow-hidden rounded-lg">

                        <table class="min-w-full">
                            <tr class="bg-gray-100">
                                <th scope="col" class="whitespace-nowrap text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                    借りた人の名前
                                </th>
                                <th scope="col" class="whitespace-nowrap text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                    借りた物の名前
                                </th>
                                <th scope="col" class="whitespace-nowrap text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                    借りた日
                                </th>
                                <th scope="col" class="whitespace-nowrap text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                    返却期限
                                </th>
                                <th class="px-6 py-3">
                                </th>
                            </tr>
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
                            <!-- レコードの挿入フォーム -->
                            <form action="{{ route('borrows.store') }}" method="POST">
                                @csrf
                                <tr class="bg-white border-b">
                                    <input type="hidden" name="friend_id" value="">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="text" name="friend_name" value="{{ old('friend_name') }}"
                                            placeholder="借りた人の名前" class="border rounded px-2 py-1 w-full">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="text" name="item_name" value="{{ old('item_name') }}"
                                            placeholder="借りた物の名前" class="border rounded px-2 py-1 w-full">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="date" name="borrowed_at" value="{{ old('borrowed_at') }}"
                                            class="border rounded px-2 py-1 w-full">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="date" name="deadline" value="{{ old('deadline') }}"
                                            class="border rounded px-2 py-1 w-full">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button type="submit"
                                            class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">保存</button>
                                    </td>
                                </tr>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main>
