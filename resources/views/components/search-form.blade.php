<form action="{{ route('search.index') }}" method="GET" onsubmit="saveKeyword(event)">

    @csrf

    <div class="relative mr-4">
        <input type="text" placeholder="検索" name="keyword" id="js-keyword"
            class="px-4 py-2 mr-48 border border-gray-300 rounded-md focus:outline-none focus:ring-2
            focus:ring-blue-500 focus:border-transparent w-full">
        <input type="submit" value="検索"
            class="absolute right-0 top-0 h-full bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold px-4 py-2 rounded-r-md cursor-pointer">
    </div>
</form>