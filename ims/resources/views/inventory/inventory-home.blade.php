<!-- layout.blade.php -->
@extends('layout.layout')

@section('content')
    <!-- your home page content goes here -->

    <div class="px-14 ml-10 mx-auto">
        <h1 class="font-inter font-semibold text-2xl mt-9">Inventory</h1>

        <div class="flex flex-col md:flex-row mt-12 md:gap-x-4">
            <div id="column-1" class="flex justify-center items-center mb-4 md:mb-0">
                <svg class="w-10 h-8 px-3 py-2 border rounded-[6px] gap-[8px]" viewBox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M3 1C1.89543 1 1 1.89543 1 3V13C1 14.1046 1.89543 15 3 15H13C14.1046 15 15 14.1046 15 13V3C15 1.89543 14.1046 1 13 1H3ZM5 6.5V9.5H2.5V6.5H5ZM2.5 10.5V13C2.5 13.2761 2.72386 13.5 3 13.5H5V10.5H2.5ZM6 10.5V13.5H9V10.5H6ZM10 10.5V13.5H13C13.2761 13.5 13.5 13.2761 13.5 13V10.5H10ZM10 9.5V6.5H13.5V9.5H10ZM9 6.5H6V9.5H9V6.5ZM4.25 4.5C4.66421 4.5 5 4.16421 5 3.75C5 3.33579 4.66421 3 4.25 3H3.25C2.83579 3 2.5 3.33579 2.5 3.75C2.5 4.16421 2.83579 4.5 3.25 4.5H4.25ZM8.25 4.5C8.66421 4.5 9 4.16421 9 3.75C9 3.33579 8.66421 3 8.25 3H6.75C6.33579 3 6 3.33579 6 3.75C6 4.16421 6.33579 4.5 6.75 4.5H8.25ZM13.5 3.75C13.5 4.16421 13.1642 4.5 12.75 4.5H10.75C10.3358 4.5 10 4.16421 10 3.75C10 3.33579 10.3358 3 10.75 3H12.75C13.1642 3 13.5 3.33579 13.5 3.75Z"
                        fill="#464F60" />
                </svg>
            </div>
        
            <div class="flex justify-start items-center w-full md:w-80 h-8">
                <div class="flex flex-row justify-start w-20 h-8 px-3 py-2 border rounded-l-[6px] rounded-r-none gap-[8px]">
                    <svg class="w-3 h-3.5" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M13.79 2.61564C14.3029 1.9591 13.8351 1 13.002 1H3.00186C2.16871 1 1.70091 1.9591 2.21383 2.61564L7.03983 8.72867C7.1772 8.90449 7.25181 9.1212 7.25181 9.34432V14.7961C7.25181 14.9743 7.46724 15.0635 7.59323 14.9375L8.60536 13.9254C8.69913 13.8316 8.75181 13.7044 8.75181 13.5718V9.34432C8.75181 9.1212 8.82643 8.90449 8.96379 8.72867L13.79 2.61564Z"
                            fill="#464F60" />
                    </svg>
                    <div class="flex flex-row items-center">
                        <h3 class="font-inter font-medium text-sm text-[#464F60]">All</h3>
                    </div>
                    <svg class="w-2.5 h-1.5 mt-1" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1.5L4 4.5L7 1.5" stroke="#464F60" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="flex flex-row justify-start w-38 h-8 px-3 py-2 border rounded-r-[6px] rounded-l-none gap-[8px]">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.68208 10.7458C8.66576 11.5361 7.38866 12.0067 6.00167 12.0067C2.68704 12.0067 0 9.31891 0 6.00335C0 2.68779 2.68704 0 6.00167 0C9.31631 0 12.0033 2.68779 12.0033 6.00335C12.0033 7.39059 11.533 8.66794 10.743 9.6845L13.7799 12.7186C14.0731 13.0115 14.0734 13.4867 13.7806 13.7799C13.4878 14.0731 13.0128 14.0734 12.7196 13.7805L9.68208 10.7458ZM10.5029 6.00335C10.5029 8.49002 8.48765 10.5059 6.00167 10.5059C3.5157 10.5059 1.50042 8.49002 1.50042 6.00335C1.50042 3.51668 3.5157 1.50084 6.00167 1.50084C8.48765 1.50084 10.5029 3.51668 10.5029 6.00335Z"
                            fill="#868FA0" />
                    </svg>
                    <div class="flex flex-row items-center">
                        <input type="search" id="default-search" placeholder="Search"
                            class="font-inter font-normal text-sm focus:outline-none">
                    </div>
                    <div class="bg-gray-300 rounded-[2px] p-1">
                        <svg class="w-1.5 h-2.5 text-gray-600" viewBox="0 0 6 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 0.5H4.20215L0.5 11.5H1.79785L5.5 0.5Z" fill="#868FA0" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex-grow mb-4 md:mb-0" id="column-3"></div>
        
            <div type="button" onclick="openAddModal()" class="bg-[#333333] flex justify-center items-center border rounded-lg mb-4 md:mb-0">
                <button class="text-white font-inter text-sm font-medium flex justify-center items-center px-3 py-1.5 gap-x-2">
                    <svg class="h-3 w-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.99999 0C6.4142 0 6.74999 0.335786 6.74999 0.75V5.25H11.25C11.6642 5.25 12 5.58579 12 6C12 6.41422 11.6642 6.75 11.25 6.75H6.74999V11.25C6.74999 11.6642 6.4142 12 5.99999 12C5.58578 12 5.24999 11.6642 5.24999 11.25V6.75H0.75C0.335786 6.75 0 6.41422 0 6C0 5.58579 0.335786 5.25 0.75 5.25H5.24999V0.75C5.24999 0.335786 5.58578 0 5.99999 0Z"
                            fill="white" />
                    </svg>
                    New Inventory
                </button>
            </div>
            <!-- model add  -->
            <div id="addModal" class="fixed inset-0 z-10 overflow-y-auto hidden">
                <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>
                    <div class="fixed inset-0 transition-opacity" aria-hidden="true" onclick="closeAddModal()"></div>
                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                    <div class="inline-block bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all 
                                            sm:align-middle w-[412px] h-[531px] top-[131px] left-[514px] p-7 gap-8">
                        <div class="bg-white ">
                            <p class="mb-7 font-medium text-lg font-inter">Add New Inventory</p>
                            <div class="grid grid-cols-1 gap-3">
                                <div class="mb-8">
                                    <label class="block text-[#32343A] font-medium text-sm font-inter mb-2" for="name">
                                        Name
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="Name">
                                </div>
                                <div class="mb-8">
                                    <label class="block text-[#32343A] font-medium text-sm font-inter mb-2" for="name">
                                        Name
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="Name">
                                </div>
                                <div class="mb-8">
                                    <label class="block text-[#32343A] font-medium text-sm font-inter mb-2" for="name">
                                        Name
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div onclick="openAddModal()"
                                class="bg-[#333333] flex justify-center items-center border rounded-lg">
                                <button
                                    class="text-white font-inter text-sm font-medium flex justify-center items-center px-3 py-1.5 gap-x-2">
                                    <svg class="h-3 w-3" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.99999 0C6.4142 0 6.74999 0.335786 6.74999 0.75V5.25H11.25C11.6642 5.25 12 5.58579 12 6C12 6.41422 11.6642 6.75 11.25 6.75H6.74999V11.25C6.74999 11.6642 6.4142 12 5.99999 12C5.58578 12 5.24999 11.6642 5.24999 11.25V6.75H0.75C0.335786 6.75 0 6.41422 0 6C0 5.58579 0.335786 5.25 0.75 5.25H5.24999V0.75C5.24999 0.335786 5.58578 0 5.99999 0Z"
                                            fill="white" />
                                    </svg>
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- model add -->
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
