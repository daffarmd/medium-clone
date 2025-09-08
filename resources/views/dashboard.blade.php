<x-app-layout>


    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4  text-gray-900">
                    <ul
                        class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400 justify-center">
                        <li class="me-2">
                            <a href="#" class="inline-block px-4 py-2 text-white bg-blue-600 rounded-lg active"
                                aria-current="page">All</a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="me-2">
                                <a href="#"
                                    class="inline-block px-4 py-2 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-white"
                                    aria-current="page">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="text-gray-1900">
                @foreach ($posts as $post)
                    <div
                        class="flex items-center bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden mt-8">
                        <!-- Bagian teks -->
                        <div class="flex-1 p-6">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                {{ $post->title }}
                            </h5>
                            <p class="mb-4 font-normal text-gray-700">
                                {{ $post->content }}
                            </p>
                            <a href="#"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Read more
                                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10" aria-hidden="true">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>

                        <!-- Bagian gambar -->
                        <div class="w-64 h-64 flex-shrink-0">
                            <img class="object-cover w-full h-full rounded-r-lg"
                                src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Thumbnail">
                        </div>


                    </div>
                @endforeach
            </div>
        </div>

    </div>
</x-app-layout>
