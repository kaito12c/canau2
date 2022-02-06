<x-app-layout>
    <x-setting heading="canau大人図鑑" :session="$session">
        <!-- This example requires Tailwind CSS v2.0+ -->
    <x-slot name="slot">
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  開催タイトル
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  開催状況
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  参加人数
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-gray-500">
                        2/1
                      </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                  <div class="text-sm text-gray-500">Optimization</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Active
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  2人/５人
                </td>
                <td class="px-3 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <button
          
                     class="inline-flex items-center px-4 py-2 bg-blue-500 
                            border border-transparent rounded-md 
                            font-semibold text-xs text-white tracking-widest 
                            hover:bg-blue-700 active:bg-blue-900 
                            focus:outline-none focus:border-blue-900 focus:ring 
                            ring-blue-300 disabled:opacity-25 transition ease-in-out 
                            duration-150"
                    ><a href="#"></a>
                      編 集
                    </button>
                </td>
              </td>
              <td class="px-3 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <form action="/admin/sessions/{{ $session->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button
                    class="inline-flex items-center px-4 py-2 bg-red-500 
                            border border-transparent rounded-md 
                            font-semibold text-xs text-white tracking-widest 
                            hover:bg-red-600 active:bg-red-900 
                            focus:outline-none focus:border-red-900 focus:ring 
                            ring-red-300 disabled:opacity-25 transition ease-in-out 
                            duration-150"
                    >
                    削 除
                    </button>
                  </form>

              </td>
              </tr>
  
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