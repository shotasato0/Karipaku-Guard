<x-main :minHeightClass="'min-h-screen'">
    <div class="container mx-auto p-6 lg:p-20">
        @if (session('login_success'))
            <div id="loginSuccessAlert"
                class="fixed top-5 right-5 bg-green-600 text-white py-3 px-6 rounded-lg shadow opacity-90 z-50">
                {{ session('login_success') }}
            </div>
        @endif

        <div class="flex flex-col space-y-4">
            <div class="flex justify-center lg:justify-end">
                <div class="flex flex-row sm:justify-end space-y-2 sm:space-y-0 sm:space-x-2 w-full">
                    <x-search-form />
                    <x-create-button />
                </div>
            </div>
            <!-- モバイルビュー用のカード表示 -->
            <div class="sm:hidden">
                @forelse ($borrows as $borrow)
                    <div class="bg-white p-2 sm:p-4 rounded-lg shadow-md mb-4">
                        <div>
                            <div><strong>貸し主　:</strong> <a href="{{ route('borrows.friend', $borrow->id) }}"
                                    class="relative text-blue-500 hover:text-blue-600 tooltip">
                                    {{ $borrow->friend->name }}
                                    <span class="tooltiptext">貸し主情報を見る</span>
                                </a>
                            </div>
                        </div>

                        <div><strong>借りた物:</strong> {{ $borrow->item_name }}</div>
                        <div><strong>借りた日:</strong> {{ $borrow->borrowed_at->format('Y-m-d') }}</div>
                        <div><strong>返却期限:</strong> {{ optional($borrow->deadline)->format('Y-m-d') ?: '未設定' }}</div>
                        <div class="flex flex-row justify-between space-y-2 mt-2">
                            <div class="flex items-center" data-trust-score="{{ $borrow->days_until_deadline }}">
                                <strong>信頼度:</strong>
                                <img src="../../images/smile.png" alt="笑顔" class="w-16 ml-4 js-smile">
                                <img src="../../images/bomb2.png" alt="爆弾" class="w-16 ml-4 hidden js-bomb">
                                <img src="../../images/ignition.png" alt="点火"
                                    class="w-20 ml-2 hidden js-ignition">
                                <img src="../../images/explosion.png" alt="爆発" class="w-24 hidden js-explosion">
                            </div>
                            <!-- 編集・削除ボタンのコンテナ -->
                            <div class="flex space-x-2 items-center">
                                <a href="{{ route('borrows.edit', $borrow) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded flex items-center justify-center h-10 w-20">
                                    編集
                                </a>
                                <form action="{{ route('borrows.destroy', $borrow) }}" method="POST"
                                    class="inline-block align-middle borrow-delete-form" id="js-borrow-delete">
                                    @csrf
                                    @method('DELETE')
                                    <x-delete-button />
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="bg-white p-4 text-center rounded-lg shadow-md">
                        データはありません
                    </div>
                @endforelse
            </div>

            {{-- デスクトップ用の表示 --}}
            <div class="hidden sm:block overflow-x-auto rounded-lg shadow-md">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-gray-200 table-header-group">
                        <tr>
                            <th scope="col"
                                class="px-6 py-4 text-left text-lg font-semibold whitespace-nowrap text-gray-700">
                                貸し主
                            </th>
                            <th scope="col"
                                class="px-6 py-4 text-left text-lg font-semibold whitespace-nowrap text-gray-700">
                                借りた物
                            </th>
                            <th scope="col"
                                class="px-6 py-4 text-left text-lg font-semibold whitespace-nowrap text-gray-700">
                                借りた日
                            </th>
                            <th scope="col"
                                class="px-6 py-4 text-left text-lg font-semibold whitespace-nowrap text-gray-700">
                                返却期限
                            </th>
                            <th scope="col"
                                class="px-10 py-4 text-left text-lg font-semibold whitespace-nowrap text-gray-700">
                                信頼度
                            </th>
                            <th scope="col"
                                class="px-5 py-4 text-left text-lg font-semibold whitespace-nowrap text-gray-700">
                                編集
                            </th>
                            <th scope="col"
                                class="px-5 py-4 text-left text-lg font-semibold whitespace-nowrap text-gray-700">
                                削除
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @forelse ($borrows as $borrow)
                            <tr>
                                <td data-label="貸し主"
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    <a href="{{ route('borrows.friend', $borrow->id) }}"
                                        class="relative text-blue-900 hover:text-blue-600 tooltip">
                                        {{ $borrow->friend->name }}
                                        <span class="tooltiptext">クリックして詳細を見る</span>
                                    </a>
                                </td>
                                <td data-label="借りた物"
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
                                    <img src="../../images/smile.png" alt="笑顔" class="w-16 sm:ml-3 js-smile">
                                    <img src="../../images/bomb2.png" alt="爆弾"
                                        class="w-16 sm:ml-4 hidden js-bomb">
                                    <img src="../../images/ignition.png" alt="点火"
                                        class="w-20 ml-1 hidden js-ignition">
                                    <img src="../../images/explosion.png" alt="爆発"
                                        class="w-20 ml-1 hidden js-explosion">
                                </td>

                                {{-- 編集と削除 --}}
                                <td class="edit-button py-2 text-sm text-gray-900 font-light whitespace-wrap">
                                    <a href="{{ route('borrows.edit', $borrow) }}"
                                        class="bg-blue-600 hover:bg-blue-500 duration-75 text-white font-bold py-2 rounded flex items-center justify-center h-10 w-20">
                                        編集
                                    </a>
                                </td>
                                <td class="delete-button px-2 py-2 text-sm text-gray-900 font-light whitespace-wrap">
                                    <form action="{{ route('borrows.destroy', $borrow) }}" method="POST"
                                        class="inline-block align-middle borrow-delete-form" id="js-borrow-delete">
                                        @csrf
                                        @method('DELETE')
                                        <x-delete-button />
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7"
                                    class="text-center text-xl py-12 whitespace-nowrap font-medium text-gray-900">
                                    データはありません
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-main>
