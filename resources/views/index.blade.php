<x-main :minHeightClass="'min-h-screen'">
    <x-slot name="title" class="text-2xl font-bold my-4">Karipaku Guard</x-slot>
    <div class="container mx-auto p-6 lg:p-12">
        <div class="flex flex-col space-y-4">
            <div class="flex justify-center lg:justify-end">
                <div class="flex flex-row space-y-2 sm:space-y-0 sm:space-x-2 w-full justify-end">
                    <x-search-form />
                    <x-create-button />
                </div>
            </div>

            <div class="overflow-x-auto rounded-lg shadow-md">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-gray-200 table-header-group">
                        <tr>
                            <th scope="col"
                                class="px-6 py-4 text-left text-sm font-semibold whitespace-nowrap text-gray-700">
                                借りた人の名前
                            </th>
                            <th scope="col"
                                class="px-6 py-4 text-left text-sm font-semibold whitespace-nowrap text-gray-700">
                                借りた物の名前
                            </th>
                            <th scope="col"
                                class="px-6 py-4 text-left text-sm font-semibold whitespace-nowrap text-gray-700">
                                借りた日
                            </th>
                            <th scope="col"
                                class="px-6 py-4 text-left text-sm font-semibold whitespace-nowrap text-gray-700">
                                返却期限
                            </th>
                            <th scope="col"
                                class="px-12 py-4 text-left text-sm font-semibold whitespace-nowrap text-gray-700">
                                信頼度
                            </th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold whitespace-nowrap text-gray-700">
                                編集
                            </th>
                            <th scope="col"
                                class="px-4 py-4 text-left text-sm font-semibold whitespace-nowrap text-gray-700">
                                削除
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @forelse ($borrows as $borrow)
                            <tr>
                                <td data-label="借りた人"
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    <a href="{{ route('borrows.friend', $borrow->id) }}" class="hover:text-blue-600">
                                        {{ $borrow->friend->name }}
                                    </a>
                                </td>
                                <td data-label="借りた物の名前"
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $borrow->item_name }}
                                </td>
                                <td data-label="借りた日"
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $borrow->borrowed_at->format('Y-m-d') }}
                                </td>
                                <td data-label="返却期限"
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    @if ($borrow->deadline)
                                        {{ $borrow->deadline->format('Y-m-d') }}
                                    @else
                                        {{ $borrow->deadline }}
                                    @endif
                                </td>

                                <td data-label="信頼度"
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                    data-trust-score="{{ $borrow->days_until_deadline }}">
                                    <img src="../../images/smile.png" alt="笑顔" class="w-16 sm:ml-4 js-smile">
                                    <img src="../../images/bomb2.png" alt="爆弾"
                                        class="w-16 sm:ml-4 hidden js-bomb">
                                    <img src="../../images/ignition.png" alt="点火"
                                        class="w-20 ml-1 hidden js-ignition">
                                    <img src="../../images/explosion.png" alt="爆発"
                                        class="w-24 hidden js-explosion">
                                </td>

                                <td class="edit-button pl-4 py-4 text-sm text-gray-900 font-light whitespace-wrap">
                                    <a href="{{ route('borrows.edit', $borrow) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded flex items-center justify-center h-10 w-20">
                                        編集
                                    </a>
                                </td>
                                <td class="delete-button px-4 py-4 text-sm text-gray-900 font-light whitespace-wrap">
                                    <form action="{{ route('borrows.destroy', $borrow) }}" method="POST"
                                        class="inline-block align-middle borrow-delete-form" id="js-borrow-delete">

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
                            <tr>
                                <td class="text-center py-4" colspan="7">No Data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
</x-main>
