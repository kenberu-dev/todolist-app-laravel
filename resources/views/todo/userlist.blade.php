@props([
    'users' => [],
])
<x-layout title="リスト | Todoアプリ">
    <x-layout.userlist-single>
            <ul class=" font-medium justify-center w-max">
                <li class="flex sticky top-10 lg:col-span-1 justify-start text-xl bg-gray-100 border-b-4 border-gray-500">
                    <div class="flex ml-3 w-96">
                        User
                    </div>
                    <div class="flex ml-3 w-96">
                        E-mail
                    </div>
                    <div class="flex w-8">
                        
                    </div>
                </li>
                @foreach ($users as $user)
                <li class="flex lg:col-span-1 items-center justify-center mb-4">
                    <p class="ml-3 text-xl w-96 text-gray-600">
                        {{ $user->name }}
                    </p>
                    <p class="ml-3 text-xl w-96 text-gray-600">
                        {{ $user->email }}
                    </p>
                    <x-element.button-deluser :userId="$user->id"></x-element.button-deluser>
                </li>
                @endforeach
                <li class="flex flex-wrap sticky bottom-6 lg:col-span-1 justify-center items-center text-xl bg-gray-100 border-t-4 border-gray-500">
                </li>
            </ul>
    </x-layout.userlist-single>
</x-layout>