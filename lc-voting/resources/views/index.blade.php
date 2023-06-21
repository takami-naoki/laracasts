<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>

        <div class="w-1/3">
            <select name="other_filters" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>

        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an idea" class="w-full border-none placeholder-gray-900 rounded-xl bg-white px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
        </div>
    </div>


    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex hover:shadow-card transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xxs font-bold uppercase rounded-xl px-4 py-3">Vote</button>
                </div>
            </div>

            <div class="flex px-2 py-6">
                <a href="" class="flex-none">
                    <img src="https://source.unsplash.com/200×200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>

                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                        <div class="text-gray-600 mt-3 line-clamp-3 text-xs">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi commodi cupiditate eos hic nisi perferendis possimus rem sequi. Consectetur, error esse facere iste officia possimus quaerat ratione repellendus soluta?
                        </div>

                        <div class="flex items-center justify-between mt-6">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                                <div>10 hours ago</div>
                                <div>&bull;</div>
                                <div>Category 1</div>
                                <div>&bull;</div>
                                <div class="text-gray-800">3 Comments</div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>
                                <button class="bg-gray-100 hover-bg-gray-200 rounded-full h-7 transition ease-in duration-150 py-2 px-3">
                                    <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>

                                    <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                        <li><a href="" class="hover:bg-gray-100 px-5 py-3 transition duration-150 block text-xs">Mark as Spam</a></li>
                                        <li><a href="" class="hover:bg-gray-100 px-5 py-3 transition duration-150 block text-xs">Delete Post</a></li>
                                    </ul>
                                </button>
                            </div>
                        </div>
                    </h4>
                </div>
            </div>
        </div> <!-- end idea-container -->

    </div> <!-- end ideas-container -->
</x-app-layout>
