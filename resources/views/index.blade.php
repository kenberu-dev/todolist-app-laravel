<x-layout title="TOP | Todoアプリ">
    <x-layout.single>
        <h1 class="text-center text-green-500 text-4xl font-bold mt-8 mb-8">
            Todoアプリ
        </h1>
        <div class="flex flex-wrap justify-center">
            <div class="w-1/2 p-4 flex flex-wrap justify-evenly">
                <x-element.button-a :href="route('login')">ログイン</x-element.button-a>
                <x-element.button-a :href="route('register')" theme="secondary">会員登録</x-element.button-a>
            </div>
        </div>
    </x-layout.single>
</x-layout>