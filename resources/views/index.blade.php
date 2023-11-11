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
                                <th scope="col"
                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    借りた人の名前
                                </th>
                                <th scope="col"
                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    借りた物の名前
                                </th>
                                <th scope="col"
                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    借りた日
                                </th>
                                <th scope="col"
                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    経過日数
                                </th>
                                <th scope="col"
                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    信頼度スコア
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- 繰り返しのアイテムデータがここに入ります -->
                            @forelse ($users as $user)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        <a href="{{ route('users.show', $user->id) }}" class="hover:text-blue-600">
                                            {{ $user->name }}
                                        </a>
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        ファイナルファンタジーXV
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        2023-01-15
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        30日
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        80
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