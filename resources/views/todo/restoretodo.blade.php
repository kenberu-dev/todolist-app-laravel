<x-layout title="リスト | Todoアプリ">
    <x-layout.todolist-single>
            <ul class=" font-medium justify-start w-max">
                <li class="flex sticky top-10 mb-4 lg:col-span-1 justify-start text-xl bg-gray-100 border-b-4 border-gray-500">
                    <div class="flex ml-3 w-96">
                        Todo
                    </div>
                    <div class="flex ml-3 w-32">
                        期限
                    </div>
                    <div class="flex w-8">
                        
                    </div>
                </li>
                @for ($i=0;$i<20;$i++)
                <li class="flex lg:col-span-1 items-center justify-start mb-4">
                    <p class="ml-3 text-xl w-96 text-gray-600">
                        This is Todo Content...
                    </p>
                    <p class="ml-3 text-xl w-32 text-gray-600">
                        YYYY/MM/DD
                    </p>
                    <x-element.button-list>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                          </svg>                         
                    </x-element.button-list>         
                </li>
                @endfor
            </ul>
    </x-layout.todolist-single>
</x-layout>