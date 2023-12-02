<x-header>
    <x-slot name="title" class="text-2xl font-bold my-4">Karipaku Guard</x-slot>
    <div class="container mx-auto p-12">
        <div class="flex flex-col">
            <div class="flex justify-end mb-4">
                <a href="{{ route('borrows.create') }}"
                    class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-3 mr-2 rounded">
                    新規作成
                </a>
            </div>
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-4 inline-block min-w-full sm:px-6 lg:px-10">
                    <div class="overflow-hidden shadow-md rounded-lg">
                        <table class="min-w-full">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th scope="col" class="text-lg  font-semibold text-gray-900 px-6 py-4 text-left">
                                        借りた人の名前
                                    </th>
                                    <th scope="col" class="text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                        借りた物の名前
                                    </th>
                                    <th scope="col" class="text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                        借りた日
                                    </th>
                                    <th scope="col" class="text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                        経過日数
                                    </th>
                                    <th scope="col" class="text-lg font-semibold text-gray-900 px-6 py-4 text-left">
                                        信頼度
                                    </th>
                                    <th scope="col" class="text-lg font-semibold text-gray-900 px-2 py-4 text-left">
                                        編集
                                    </th>
                                    <th scope="col" class="text-lg font-semibold text-gray-900 py-4 text-left">
                                        削除
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($borrows as $borrow)
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            <a href="{{ route('borrows.friend', $borrow->id) }}"
                                                class="hover:text-blue-600">
                                                {{ $borrow->friend->name }}
                                            </a>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $borrow->item_name }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $borrow->borrowed_at->format('Y-m-d') }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $borrow->days_passed }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $borrow->trust_score }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light py-4 whitespace-wrap">
                                            <a href="{{ route('borrows.edit', $borrow) }}"
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded inline-block align-middle text-center"
                                                style="line-height: normal; height: 38px; width: 80px;">
                                                編集
                                            </a>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light py-4 whitespace-wrap">
                                            <form action="{{ route('borrows.destroy', $borrow) }}" method="POST"
                                                class="inline-block align-middle" id="js-borrow-delete">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                                    style="line-height: normal; height: 38px; width: 80px;">
                                                    削除
                                                </button>
                                            </form>
                                        </td>


                                    </tr>
                                @empty
                                    <td class="text-center py-4" colspan="7">No Data</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-header>
