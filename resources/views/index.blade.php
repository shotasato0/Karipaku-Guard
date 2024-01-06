<x-main :minHeightClass="'min-h-screen'">
    <x-slot name="title" class="text-2xl font-bold my-4">Karipaku Guard</x-slot>
    <div class="container mx-auto p-6 lg:p-12">
        <div class="flex justify-end mb-4">
            <x-search-form class="w-full lg:w-auto" />
            <x-create-button class="ml-2" />
        </div>

        <div class="overflow-x-auto rounded-lg shadow-md">
            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-200">
                    <tr class="text-left text-lg font-semibold text-gray-700">
                        <th class="px-6 py-4 whitespace-nowrap">借りた人の名前</th>
                        <th class="px-6 py-4 whitespace-nowrap">借りた物の名前</th>
                        <th class="px-6 py-4 whitespace-nowrap">借りた日</th>
                        <th class="px-6 py-4 whitespace-nowrap">返却期限</th>
                        <th class="px-12 py-4 whitespace-nowrap">信頼度</th>
                        <th class="px-4 py-4 whitespace-nowrap">オプション</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @forelse ($borrows as $borrow)
                        <tr>
                            <td data-label="借りた人の名前"
                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                <a href="{{ route('borrows.friend', $borrow->id) }}" class="hover:text-blue-600">
                                    {{ $borrow->friend->name }}
                                </a>
                            </td>
                            <td data-label="借りた物の名前"
                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $borrow->item_name }}
                            </td>
                            <td data-label="借りた日" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $borrow->borrowed_at->format('Y-m-d') }}
                            </td>
                            <td data-label="返却期限" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                @if ($borrow->deadline)
                                    {{ $borrow->deadline->format('Y-m-d') }}
                                @else
                                    {{ $borrow->deadline }}
                                @endif
                            </td>
                            <td data-label="信頼度" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                data-trust-score="{{ $borrow->days_until_deadline }}">
                                <img src="../../images/smile.png" alt="笑顔" class="w-16 sm:ml-4 js-smile">
                                <img src="../../images/bomb2.png" alt="爆弾" class="w-16 sm:ml-4 hidden js-bomb">
                                <img src="../../images/ignition.png" alt="点火"
                                    class="w-20 ml-1 hidden js-ignition">
                                <img src="../../images/explosion.png" alt="爆発" class="w-24 hidden js-explosion">
                            </td>
                            <td data-label="オプション" class="px-4 py-4 whitespace-nowrap text-center">
                                <div class="relative inline-block text-left">
                                    <button type="button"
                                        class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none"
                                        id="menu-button-{{ $borrow->id }}" aria-expanded="true" aria-haspopup="true">
                                        <svg class="ml-2 -mr-1 h-5 w-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6h16M4 12h16m-7 6h7"></path>
                                        </svg> <!-- ここにアイコンを挿入 -->
                                    </button>

                                    <div class="dropdown-menu origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                        style="display: none;" role="menu" aria-orientation="vertical"
                                        id="menu-button" aria-labelledby="menu-button-{{ $borrow->id }}"
                                        tabindex="-1">
                                        <div class="py-1" role="none">
                                            <a href="{{ route('borrows.edit', $borrow) }}"
                                                class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                                tabindex="-1" id="menu-item-0-{{ $borrow->id }}">編集</a>
                                            <form action="{{ route('borrows.destroy', $borrow) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-gray-700 block w-full text-left px-4 py-2 text-sm"
                                                    role="menuitem" tabindex="-1"
                                                    id="menu-item-1-{{ $borrow->id }}">削除</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-sm text-gray-900">No data available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-main>
