<div
    class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0 mb-5">
    <a href="/dashboard/posts/create"
        class="flex items-center justify-center text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">

        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
        </svg>
        Create Course</a>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">

    @if (session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-black text-sm px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">{{ session('success') }}</strong>
        </div>
    @endif

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>

                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($programs as $program)
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td class="px-4 py-3">{{ $loop->iteration }}</td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $program->title }}
                    </th>

                    <td class="px-6 py-4">
                        {{ $program->category->name }}
                    </td>
                    <td class="px-6 py-4">
                        Rp{{ $program->price }},00
                    </td>
                    <td class="px-6 py-4">
                        <a href="/dashboard/posts/{{ $program->id }}/edit"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        |

                        <form action="/dashboard/posts/{{ $program->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline"
                                onclick="return confirm('Are you sure you want to delete this program?')">Delete</button>
                            |
                        </form>
                        <a href="/dashboard/posts/{{ $program->id }}"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
