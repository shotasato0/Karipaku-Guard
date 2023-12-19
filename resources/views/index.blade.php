<x-header>
    <x-slot name="title" class="text-2xl font-bold my-4">Karipaku Guard</x-slot>
    <div class="container mx-auto p-12">
        <div class="flex flex-col">
            <div class="flex lg:justify-end justify-center mb-4">
                <div class="sm:flex mx-2 w-full">
                    <x-search-form />
                    <x-create-button />
                </div>
            </div>

            <div class="overflow-x-auto -mx-6 lg:-mx-8">
                <div class="py-4 block min-w-full px-6 lg:px-10">
                    <div class="overflow-hidden shadow-md rounded-lg">
                        <table class="min-w-full">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th scope="col" class="table-head">
                                        借りた人の名前
                                    </th>
                                    <th scope="col" class="table-head">
                                        借りた物の名前
                                    </th>
                                    <th scope="col" class="table-head">
                                        借りた日
                                    </th>
                                    <th scope="col" class="table-head">
                                        経過日数
                                    </th>
                                    <th scope="col" class="table-head padding-left-2-5rem">
                                        信頼度
                                    </th>
                                    <th scope="col" class="table-head">
                                        編集
                                    </th>
                                    <th scope="col" class="table-head">
                                        削除
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($borrows as $borrow)
                                    <tr class="bg-white border-b">
                                        <td data-label="借りた人の名前" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            <a href="{{ route('borrows.friend', $borrow->id) }}"
                                                class="hover:text-blue-600">
                                                {{ $borrow->friend->name }}
                                            </a>
                                        </td>
                                        <td data-label="借りた物の名前" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $borrow->item_name }}
                                        </td>
                                        <td data-label="借りた日" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $borrow->borrowed_at->format('Y-m-d') }}
                                        </td>
                                        <td data-label="経過日数" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $borrow->days_passed }}
                                        </td>
                                        <td data-label="信頼度" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"
                                            data-trust-score="{{ $borrow->trust_score }}">
                                            {{-- スコアの数値 --}}
                                            {{-- {{ $borrow->trust_score }}  --}}
                                            <img src="../../images/bomb2.png" alt="爆弾" class="w-16 sm:ml-4"
                                                id="js-bomb">
                                            <img src="../../images/ignition.png" alt="点火" class="w-20 ml-1 hidden"
                                                id="js-ignition">
                                            <img src="../../images/exprosion.png" alt="爆発" class="w-24 hidden"
                                                id="js-exprosion">
                                        </td>
                                        <td class="edit-button pl-4 py-4 text-sm text-gray-900 font-light whitespace-wrap">
                                            <a href="{{ route('borrows.edit', $borrow) }}"
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded flex items-center justify-center h-10 w-20">
                                                編集
                                            </a>
                                        </td>
                                        <td class="delete-button px-4 py-4 text-sm text-gray-900 font-light whitespace-wrap">
                                            <form action="{{ route('borrows.destroy', $borrow) }}" method="POST"
                                                class="inline-block align-middle borrow-delete-form"
                                                id="js-borrow-delete">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 rounded flex items-center justify-center h-10 w-20">
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
