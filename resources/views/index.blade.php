<x-header>
    <x-slot name="title">Karipaku Guard</x-slot>
    <div class="container mx-auto p-8">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        借りた人の名前
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        借りた物の名前
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        借りた日
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        経過日数
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        信頼度スコア
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        編集
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <a href="{{ route('borrows.create') }}" class="bg-white hover:text-blue-600 text-sm text-gray-900 font-light px-6 py-4">
                                    新規作成
                                </a>
                                <!-- 繰り返しのアイテムデータがここに入ります -->
                                @forelse ($borrows as $borrow)
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            <a href="{{ route('borrows.friend', $borrow->friend) }}"
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
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <a href="{{ route('borrows.edit', $borrow) }}" class="hover:text-blue-600">
                                                編集
                                            </a>
                                            <form action="{{ route('borrows.destroy', $borrow) }}" method="POST"
                                                class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="hover:text-red-600">削除</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <td>No Data</td>
                                @endforelse
                                <!-- 他のアイテム行も同様に -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-header>
