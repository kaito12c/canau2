<x-app-layout>
    <x-setting heading="サポーター一覧">
        <!-- This example requires Tailwind CSS v2.0+ -->
    <x-slot name="slot">
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-top inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($sessions as $session )
                <tr>

                    <td class="pr-2 pl-6 py-4 w-60">
                    <div class="items-left">
                        <div class="flex-shrink-0 h-20 w-20">
                        <img class="h-20 w-20 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                        </div>
                    
                        <div class="text-m font-medium text-gray-900">
                            {{ $session->title }}
                        </div>
                        <div class="text-xs text-gray-500">
                            サツドラホールディングす株式会社代表取締役社長
                        </div>
                        </div>
                    </div>
                    </td>
                    <td class="px-2 py-2 whitespace-nowrap w-100">
                    <div class="text-gray-900 font-bold">仕事内容</div>
                        普段から人と話して、面白いと思ったら仕事にします。
                    <div class=" text-gray-900 font-bold">経験してきたこと</div>
                    <div class="flex w-80">
                        <div class="my-2 mr-1 px-2 inline-flex text-xs leading-5 font-semibold rounded bg-green-100 text-green-800">
                            #Active
                        </div>
                        <div class="my-2 mx-1 px-2 inline-flex text-xs leading-5 font-semibold rounded bg-green-100 text-green-800">
                            #やりたいことがみつからない
                        </div>
                    </div>

                    </td>
                    <td class="px-6 py-4 mb-6 whitespace-nowrap text-right text-sm font-medium">
                        <button
                            class="inline-flex items-center px-4 py-2 bg-blue-500 
                            border border-transparent rounded-md 
                            font-semibold text-xs text-white tracking-widest 
                            hover:bg-blue-700 active:bg-blue-900 
                            focus:outline-none focus:border-blue-900 focus:ring 
                            ring-blue-300 disabled:opacity-25 transition ease-in-out 
                            duration-150">
                                <a href="/sessions">
                                    詳細を見る
                                </a>
                            </button>
                    </td>

                </tr>
                @endforeach
                <!-- More people... -->
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>

    
    </x-slot>
</x-setting>
    
</x-app-layout>