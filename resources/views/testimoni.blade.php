@extends('layouts.main')

@section('container')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Testimonials</h2>
                <p class="mb-8 font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Join a community of driven
                    individuals and embark on a transformative journey towards achieving your goals with the guidance of
                    experts who care about your success.</p>
            </div>
            <div class="grid mb-8 lg:mb-12 lg:grid-cols-2">
                <figure
                    class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 md:p-12 lg:border-r dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">The best decision I've made for my
                            career</h3>
                        <p class="my-4">"Joining this mentorship program was the best decision I've made for my career. My
                            mentor provided invaluable advice and helped me navigate challenges with ease. I feel more
                            confident and capable than ever before!"</p>

                    </blockquote>
                    <figcaption class="flex justify-center items-center space-x-3">
                        <img class="w-9 h-9 rounded-full"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left">
                            <div>Bonnie Green</div>

                        </div>
                    </figcaption>
                </figure>
                <figure
                    class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 md:p-12 dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">This experience has truly been
                            transformative for my personal and professional growth
                        </h3>
                        <p class="my-4">"The personalized guidance I received was exceptional. My mentor not only helped
                            me set clear goals but also provided the tools and encouragement to achieve them. This
                            experience has truly been transformative for my personal and professional growth."</p>

                    </blockquote>
                    <figcaption class="flex justify-center items-center space-x-3">
                        <img class="w-9 h-9 rounded-full"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left">
                            <div>Roberta Casas</div>

                        </div>
                    </figcaption>
                </figure>
                <figure
                    class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 lg:border-b-0 md:p-12 lg:border-r dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Having a mentor who genuinely cares
                            about my success made all the difference
                        </h3>
                        <p class="my-4">"Having a mentor who genuinely cares about my success made all the difference. The
                            support and insights I gained were beyond my expectations. I highly recommend this program to
                            anyone looking to take their career to the next level."</p>

                    </blockquote>
                    <figcaption class="flex justify-center items-center space-x-3">
                        <img class="w-9 h-9 rounded-full"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left">
                            <div>Jese Leos</div>

                        </div>
                    </figcaption>
                </figure>
                <figure
                    class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-gray-200 md:p-12 dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">This mentorship program exceeded all
                            my expectations</h3>
                        <p class="my-4">"This mentorship program exceeded all my expectations. My mentor's expertise and
                            encouragement helped me overcome obstacles and unlock new opportunities. I am grateful for the
                            growth and success I've achieved with their guidance."</p>

                    </blockquote>
                    <figcaption class="flex justify-center items-center space-x-3">
                        <img class="w-9 h-9 rounded-full"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left">
                            <div>Joseph McFall</div>

                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="text-center">
                <a href="#"
                    class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Show
                    more...</a>
            </div>
    </section>
@endsection
