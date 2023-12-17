<header>
    <nav class="p-6 bg-gray-100 flex items-center  justify-between">
            <div class="flex bg-orange-600 p-2 rounded-lg cursor-pointer hover:scale-95 transition-all ">
                <p class="text-2xl text-semibold text-gray-200">Utkarsh</p>
            </div>
            <div class="font-bold text-2xl ">
                <a href="{{ url('/posts') }}" class="text-gray-600  hover:text-orange-600  dark:text-gray-400 dark:hover:text-white px-6 ">Posts</a>

                <a href="{{ url('/dashboard') }}" class="text-gray-600 hover:text-orange-600  dark:text-gray-400 dark:hover:text-white px-6 ">Create</a>

                <a href="{{ url('/admin/login') }}" class="text-gray-600 hover:text-orange-600  dark:text-gray-400 dark:hover:text-white px-6 ">Log in</a>

                <a href="{{ url('/admin/register') }}" class="text-gray-600 hover:text-orange-600  dark:text-gray-400 dark:hover:text-white px-6 ">Register</a>

            </div>
    </nav>
</header>