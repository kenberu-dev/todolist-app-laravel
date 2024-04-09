@props([
    'user_name' => '',
    'todolists' => [],
])
<x-layout title="リスト | Todoアプリ">
    <x-layout.todolist-single>
            <ul class=" font-medium justify-start w-max">
                <li class="flex sticky top-10 mb-4 lg:col-span-1 justify-start text-xl bg-gray-100 border-b-4 border-gray-500">
                    <div class="flex w-8">
                    </div>
                    <div class="flex ml-3 w-96">
                        「{{ $user_name }}」さんのTodo
                    </div>
                    <div class="flex ml-3 w-32">
                        期限
                    </div>
                    <div class="flex w-8">
                        
                    </div>
                    <div class="flex w-8">
                        
                    </div>
                </li>
                @if ($todolists->isEmpty())
                    <li class="flex h-full w-auto justify-center items-center mb-4">
                        <div class="h-full justify-center text-4xl">Todoを入力してください</div>
                    </li>
                @else
                    @foreach($todolists as $todo)
                    <li class="flex lg:col-span-1 items-center justify-start mb-4">
                        <div class="flex items-center">
                            <input id="default-checkbox" type="checkbox" value="" class="w-8 h-8 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div>
                        <p class="ml-3 text-xl w-96 text-gray-600">
                            {{ $todo->id }}
                        </p>
                        <p class="ml-3 text-xl w-32 text-gray-600">
                            {{ $todo->deadline }}
                        </p>
                        <x-element.button-list :href="route('edittodo-page'), ['todoId' => $todo->id]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                        </x-element.button-list>
                        <x-element.button-list theme="secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>                          
                        </x-element.button-list>
                    </li>
                    @endforeach    
                @endif
                
                <li class="flex flex-wrap sticky bottom-6 lg:col-span-1 justify-center items-center text-xl bg-gray-100 border-t-4 border-gray-500">
                    <div class="flex flex-wrap w-1/2 p-2 justify-evenly">
                        <x-element.button-a :href="route('addtodo-page')">Todo登録</x-element.button-a>
                        <x-element.button-a :href="route('restoretodo')" theme="secondary">Todo復元</x-element.button-a>
                    </div>
                </li>
            </ul>
    </x-layout.todolist-single>
</x-layout>