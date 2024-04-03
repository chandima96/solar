<!-- layout.blade.php -->
@extends('layout.layout')

@section('content')
    <!-- your home page content goes here -->

    <div class="px-14 ml-10 mx-auto">
        <h1 class="font-inter font-semibold text-2xl mt-9">Inventory Item Name</h1>
        <div class="pt-10 grid gap-y-3 font-normal font-inter text-base">
            <h2 >Description </h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                but also  </p>
        </div>
        <div class="pt-5 grid gap-y-3 font-normal font-inter text-base">
            <h2>Description </h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                but also  </p>
        </div>
        <div class="pt-5 grid gap-y-3 font-normal font-inter text-base">
            <h2>Description </h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                but also  </p>
        </div>

        <div class="flex justify-between pt-20">
            <div>
                <h1 class="font-inter font-semibold text-2xl">Batch Table</h1>
            </div>
        
            <div class="bg-[#333333] grid justify-items-end items-end border rounded-lg">
                <button class="text-white font-inter text-sm font-medium flex justify-center items-center px-3 py-1.5 gap-x-2">
                    <svg class="h-3 w-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.99999 0C6.4142 0 6.74999 0.335786 6.74999 0.75V5.25H11.25C11.6642 5.25 12 5.58579 12 6C12 6.41422 11.6642 6.75 11.25 6.75H6.74999V11.25C6.74999 11.6642 6.4142 12 5.99999 12C5.58578 12 5.24999 11.6642 5.24999 11.25V6.75H0.75C0.335786 6.75 0 6.41422 0 6C0 5.58579 0.335786 5.25 0.75 5.25H5.24999V0.75C5.24999 0.335786 5.58578 0 5.99999 0Z" fill="white"/>
                        </svg>
                        New 
                </button>
            </div>
        </div>
        



        <div class="overflow-x-auto py-10">
            <table class="table-auto w-full">
                <thead class="bg-gray-50">
                    <tr class="font-inter text-gray-500 text-xs text-left">
                        <th class="flex justify-center px-1 py-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                            </label>
                        </th>
                        <th class="px-1 py-1 text-center text-gray-900">
                            <div class="flex justify-center">
                                <h4>#</h4>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.39043 13.512C8.19027 13.7622 7.80973 13.7622 7.60957 13.512L4.64988 9.81235C4.38797 9.48497 4.62106 9 5.04031 9H10.9597C11.3789 9 11.612 9.48497 11.3501 9.81235L8.39043 13.512Z"
                                        fill="#A1A9B8" />
                                    <path
                                        d="M8.39043 2.48804C8.19027 2.23784 7.80973 2.23784 7.60957 2.48804L4.64988 6.18765C4.38797 6.51503 4.62106 7 5.04031 7H10.9597C11.3789 7 11.612 6.51503 11.3501 6.18765L8.39043 2.48804Z"
                                        fill="#464F60" />
                                </svg>
                            </div>
                        </th>
                        <th class="px-1 py-1">
                            
                        </th>
                        <th class="px-4 py-1"> 
                            Column 02
                        </th>
                        <th class="px-3 py-1"> 
                            Column 03
                        </th>
                        <th class="px-3 py-1"> 
                            Column 04
                        </th>
                        <th class="px-3 py-1"> 
                            Column 05
                        </th>
                        <th class="px-3 py-1"> 
                            Column 06
                        </th>
                        <th class="px-3 py-1"> 
                           
                        </th>
                    </tr>
                </thead>
                <tbody class="text-gray-900 font-normal text-sm border-b border-gray-200">
                    <td class="flex justify-center px-1 py-2 ">
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                        </label>
                    </td>

                    <td>
                        <div class="flex justify-center py-2">
                            <h4 class="text-left">1</h4>
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div class="px-4 py-py-2 ">
                            <a href="/src/Page-Inventry-Items.html"><h4 class="text-left">**********************</h4></a>
                        </div>
                    </td>
                    <td>
                        <div class="px-3 py-2 ">
                            <h4 class="text-left">**********************</h4>
                        </div>
                    </td>
                    <td>
                        <div class="px-3 py-2 ">
                            <h4 class="text-left">**********************</h4>
                        </div>
                    </td>
                    <td>
                        <div class="px-3 py-2 ">
                            <h4 class="text-left">**********************</h4>
                        </div>
                    </td>
                    <td>
                        <div class="px-3 py-2 ">
                            <h4 class="text-left">**********************</h4>
                        </div>
                    </td>
                    <td>
                        <div class="flex justify-center gap-x-2">
                            <button class="text-green-600 hover:text-green-700">
                                <svg class="w-3 h-3" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.91406 9.69237L0.031931 12.0447C-0.00194234 12.1352 -0.00904269 12.2336 0.0114781 12.328C0.031999 12.4225 0.0792735 12.509 0.147656 12.5773C0.216038 12.6456 0.302638 12.6928 0.397113 12.7132C0.491588 12.7337 0.589945 12.7265 0.680437 12.6925L3.03211 11.8104C3.30128 11.7096 3.54575 11.5523 3.74909 11.3492L10.5611 4.53729C10.5611 4.53729 10.3234 3.82502 9.61183 3.11274C8.90022 2.40114 8.18726 2.16349 8.18726 2.16349L1.37526 8.9754C1.17213 9.17874 1.01487 9.4232 0.91406 9.69237ZM9.1372 1.21357L10.0656 0.285136C10.2321 0.118648 10.4544 0.0125796 10.6866 0.0515162C11.0136 0.105222 11.5137 0.267682 11.985 0.739621C12.4569 1.21156 12.6194 1.71102 12.6731 2.03796C12.712 2.27023 12.606 2.49244 12.4395 2.65893L11.5104 3.58737C11.5104 3.58737 11.2734 2.87577 10.5611 2.16417C9.84948 1.45122 9.1372 1.21357 9.1372 1.21357Z" fill="#3B648A"/>
                                    </svg>
                                    
                            </button>
                            <button class="text-red-400 hover:text-red-600 ">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                              <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                              </svg>
                             </button>
                        </div>
                    </td>
                </tbody>
                <tbody class="text-gray-900 font-normal text-sm border-b border-gray-200">
                    <td class="flex justify-center px-1 py-2">
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                        </label>
                    </td>

                    <td>
                        <div class="flex justify-center">
                            <h4 class="text-left py-2 ">1</h4>
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div class="px-4 py-2 ">
                            <a href="/src/Page-Inventry-Items.html"><h4 class="text-left">**********************</h4></a>
                        </div>
                    </td>
                    <td>
                        <div class="px-3 py-2 ">
                            <h4 class="text-left">**********************</h4>
                        </div>
                    </td>
                    <td>
                        <div class="px-3 py-2 ">
                            <h4 class="text-left">**********************</h4>
                        </div>
                    </td>
                    <td>
                        <div class="px-3 py-2 ">
                            <h4 class="text-left">**********************</h4>
                        </div>
                    </td>
                    <td>
                        <div class="px-3 py-2 ">
                            <h4 class="text-left">**********************</h4>
                        </div>
                    </td>
                    <td>
                        <div class="flex justify-center gap-x-2">
                            <button class="text-[#3B648A]">
                                <svg class="w-3 h-3 " viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.91406 9.69237L0.031931 12.0447C-0.00194234 12.1352 -0.00904269 12.2336 0.0114781 12.328C0.031999 12.4225 0.0792735 12.509 0.147656 12.5773C0.216038 12.6456 0.302638 12.6928 0.397113 12.7132C0.491588 12.7337 0.589945 12.7265 0.680437 12.6925L3.03211 11.8104C3.30128 11.7096 3.54575 11.5523 3.74909 11.3492L10.5611 4.53729C10.5611 4.53729 10.3234 3.82502 9.61183 3.11274C8.90022 2.40114 8.18726 2.16349 8.18726 2.16349L1.37526 8.9754C1.17213 9.17874 1.01487 9.4232 0.91406 9.69237ZM9.1372 1.21357L10.0656 0.285136C10.2321 0.118648 10.4544 0.0125796 10.6866 0.0515162C11.0136 0.105222 11.5137 0.267682 11.985 0.739621C12.4569 1.21156 12.6194 1.71102 12.6731 2.03796C12.712 2.27023 12.606 2.49244 12.4395 2.65893L11.5104 3.58737C11.5104 3.58737 11.2734 2.87577 10.5611 2.16417C9.84948 1.45122 9.1372 1.21357 9.1372 1.21357Z"
                                        fill="#3B648A" />
                                </svg>
                            </button>
                            <button class="text-red-400 hover:text-red-600 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="currentColor" class="bi bi-trash"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                    <path
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tbody>
            </table>
        </div>
    </div>    

    @endsection