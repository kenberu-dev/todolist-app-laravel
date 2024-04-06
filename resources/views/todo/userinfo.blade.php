<x-layout title="アカウント情報 | Todoアプリ">
    <x-layout.single>
        <div class="flex flex-col items-center">
            <div class="my-4 text-4xl font-extrabold text-green-500">
                アカウント情報
            </div>
            <div class="items-start">
                <div class="flex items-center">
                    <div class="text-xl w-28">ユーザー名</div>
                    <div class="ml-4 text-xl dark:bg-gray-900 dark:text-gray-300">
                        User Name
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="text-xl w-28">メールアドレス</div>
                    <div class="ml-4 text-xl dark:bg-gray-900 dark:text-gray-300">
                        user@example.com
                    </div>
                </div>
            </div>
            
            <div class="mt-4">
                <x-element.button-a :href="route('todolist')">一覧に戻る</x-element>
                <x-element.button-a theme="secondary">退　会</x-element.button>
            </div>
        </div>
    </x-layout.single>
</x-layout>