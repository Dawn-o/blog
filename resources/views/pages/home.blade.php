<x-layout>
    <x-slot:title> {{ $title }} </x-slot:title>
    <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:py-28">
        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
            <div
                class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                Introducing our new blog series. <a href="/posts" class="font-semibold text-indigo-600"><span
                        class="absolute inset-0" aria-hidden="true"></span>Discover more <span
                        aria-hidden="true">&rarr;</span></a>
            </div>
        </div>
        <div class="text-center">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Insights to Elevate Your Knowledge
            </h1>
            <p class="mt-6 text-lg leading-8 text-gray-600">Dive into our collection of articles covering a wide range
                of topics. From industry insights to practical tips, our blog is designed to inform and inspire.</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="/posts"
                    class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Explore
                    Articles</a>
                <a href="/about" class="text-sm font-semibold leading-6 text-gray-900">Learn more about us <span
                        aria-hidden="true">→</span></a>
            </div>
        </div>
    </div>

    <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
        <dl class="grid max-w-screen-md gap-8 mx-auto text-gray-900 sm:grid-cols-3 ">
            <div class="flex flex-col items-center justify-center">
                <dt class="mb-2 text-3xl md:text-4xl font-extrabold">100+</dt>
                <dd class="font-light text-gray-500">Articles Published</dd>
            </div>
            <div class="flex flex-col items-center justify-center">
                <dt class="mb-2 text-3xl md:text-4xl font-extrabold">1K+</dt>
                <dd class="font-light text-gray-500">Monthly Readers</dd>
            </div>
            <div class="flex flex-col items-center justify-center">
                <dt class="mb-2 text-3xl md:text-4xl font-extrabold">50+</dt>
                <dd class="font-light text-gray-500">Contributors</dd>
            </div>
        </dl>
    </div>
    
    <div class="py-20 px-4 mx-auto max-w-screen-xl sm:py-36 lg:px-6">
        <div class="max-w-screen-md mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 ">Explore Our Engaging
                Articles</h2>
            <p class="text-gray-500 sm:text-xl">Our blog offers insights, tips, and in-depth articles
                on a variety of topics to help you stay informed and inspired.</p>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
            <div>
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12">
                    <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm9-3a1 1 0 00-2 0v3a1 1 0 00.293.707l2 2a1 1 0 001.414-1.414L11 10.586V7z">
                        </path>
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold ">Latest News</h3>
                <p class="text-gray-500">Stay updated with the latest news and trends in various
                    industries, straight from our expert writers.</p>
            </div>
            <div>
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12">
                    <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8 2a2 2 0 00-2 2v12a2 2 0 002 2h4a2 2 0 002-2V4a2 2 0 00-2-2H8zM6 6h8v2H6V6zm0 4h8v2H6v-2zm0 4h8v2H6v-2z">
                        </path>
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold ">In-Depth Analysis</h3>
                <p class="text-gray-500">Read comprehensive articles that provide deep insights and
                    thorough analysis on a variety of subjects.</p>
            </div>
            <div>
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12">
                    <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M6 3a1 1 0 011-1h6a1 1 0 011 1v1H6V3zM4 6h12a1 1 0 011 1v9a1 1 0 01-1 1H4a1 1 0 01-1-1V7a1 1 0 011-1zm2 3v7h8v-7H6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold ">Guides & Tutorials</h3>
                <p class="text-gray-500">Find step-by-step guides and tutorials to help you master
                    new skills and knowledge areas.</p>
            </div>
            <div>
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12">
                    <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4 3a1 1 0 100 2h12a1 1 0 100-2H4zM4 7a1 1 0 100 2h12a1 1 0 100-2H4zM4 11a1 1 0 100 2h12a1 1 0 100-2H4zM4 15a1 1 0 100 2h12a1 1 0 100-2H4z">
                        </path>
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold ">Opinions & Editorials</h3>
                <p class="text-gray-500">Read opinion pieces and editorials from thought leaders and
                    industry experts on current topics and issues.</p>
            </div>
            <div>
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12">
                    <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.92A5.98 5.98 0 006 9v1a1 1 0 102 0V9a3.978 3.978 0 011-2.92V7a1 1 0 102 0V5zM6 14a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold ">Tech Reviews</h3>
                <p class="text-gray-500">Discover our reviews on the latest technology, gadgets, and
                    software to help you make informed decisions.</p>
            </div>
            <div>
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12">
                    <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 3a1 1 0 000 2h10a1 1 0 000-2H5zM3 7a1 1 0 011-1h12a1 1 0 011 1v7a1 1 0 01-1 1H4a1 1 0 01-1-1V7z">
                        </path>
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold ">Community Stories</h3>
                <p class="text-gray-500">Read inspiring stories and experiences shared by our
                    community members, and learn from their journeys.</p>
            </div>
        </div>
    </div>
    

</x-layout>
