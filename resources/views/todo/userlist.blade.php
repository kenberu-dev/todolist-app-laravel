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
                @for ($i=0;$i<20;$i++)
                <li class="flex lg:col-span-1 items-center justify-center mb-4">
                    <p class="ml-3 text-xl w-96 text-gray-600">
                        This is User name
                    </p>
                    <p class="ml-3 text-xl w-96 text-gray-600">
                        user@example.com
                    </p>
                    <x-element.button-list theme="secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                          </svg>                          
                    </x-element.button-list>
                </li>
                @endfor
            </ul>
    </x-layout.userlist-single>
</x-layout>