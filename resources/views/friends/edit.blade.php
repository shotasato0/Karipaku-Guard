<x-header>
    <x-slot name="title">{{ $borrow }} - Karipaku Guard</x-slot>

    <body class="bg-gray-100">
        <div class="container mx-auto px-4 md:px-0">
            <div class="bg-white rounded-lg shadow-lg p-5 md:p-8 my-10">
                <a href="/" class="mb-5 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">
                    &laquo; Back
                </a>
                <h1 class="text-3xl font-bold mb-6">
                    {{ $borrow->friend->name }} - Edit
                </h1>
                {{-- <form method="POST" action="{{ route('friends.update', $borrow->id) }}"> --}}
                    <form method="POST" action="{{ route('friends.update', ['friend' => $borrow->friend->id]) }}">
                    @csrf
                    @method('PATCH')
                    <table class="table-auto w-full mb-6">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">年齢</th>
                                <th class="px-4 py-2">性別</th>
                                <th class="px-4 py-2">電話番号</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">住所</th>
                                <th class="px-4 py-2">あなたとの関係</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">
                                    <input type="text" name="age" value="{{ $borrow->friend->age }}" class="w-full"/>
                                </td>
                                <td class="border px-4 py-2">
                                    <input type="text" name="gender" value="{{ $borrow->friend->gender }}" class="w-full"/>
                                </td>
                                <td class="border px-4 py-2">
                                    <input type="text" name="phone" value="{{ $borrow->friend->phone }}" class="w-full"/>
                                </td>
                                <td class="border px-4 py-2">
                                    <input type="email" name="email" value="{{ $borrow->friend->email }}" class="w-full"/>
                                </td>
                                <td class="border px-4 py-2">
                                    <input type="text" name="address" value="{{ $borrow->friend->address }}" class="w-full"/>
                                </td>
                                <td class="border px-4 py-2">
                                    <input type="text" name="relationship_type" value="{{ $borrow->friend->relationship_type }}" class="w-full"/>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded transition duration-300">
                        Save Changes
                    </button>
                </form>
            </div>
        </div>
    </body>
</x-header>
