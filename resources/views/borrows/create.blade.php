<x-header>
    <x-slot name="title">Karipaku Guard</x-slot>
    <div class="container mx-auto p-8">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <!-- レコードの挿入フォーム -->
                            <form action="{{ route('borrows.store') }}" method="POST">
                                @csrf
                                <tr class="bg-white border-b">
                                    <input type="hidden" name="friend_id" value="">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="text" name="friend_name" placeholder="借りた人の名前"
                                            class="border rounded px-2 py-1">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="text" name="item_name" placeholder="借りた物の名前"
                                            class="border rounded px-2 py-1">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="date" name="borrowed_at" class="border rounded px-2 py-1">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="number" name="days_passed" placeholder="経過日数"
                                            class="border rounded px-2 py-1">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="number" name="trust_score" placeholder="信頼度スコア"
                                            class="border rounded px-2 py-1">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button type="submit" class="hover:text-blue-600">追加</button>
                                    </td>
                                </tr>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-header>
