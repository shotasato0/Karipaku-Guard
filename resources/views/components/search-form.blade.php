<div class="flex w-1/2 sm:w-1/2 lg:w-1/3 mt-2 sm:mt-0">
    <form action="{{ route('search.index') }}" method="GET" onsubmit="saveKeyword(event)" class="flex-grow">
        @csrf

        <div class="relative mr-0 sm:mr-4">
            <input type="text" placeholder="キーワード検索" name="keyword" id="js-keyword"
                class="px-4 py-2 border border-gray-300 rounded-l-md sm:rounded-md focus:outline-none focus:ring-2
                focus:ring-blue-500 focus:border-transparent w-full border-r-0">
            <input type="submit" value="検索"
                class="absolute sm:right-0 sm:top-0 h-full bg-gray-300 hover:bg-gray-200 text-gray-800 font-bold px-4 py-2 rounded-r-md cursor-pointer -ml-px border-l border-gray-300">
        </div>
    </form>
</div>
