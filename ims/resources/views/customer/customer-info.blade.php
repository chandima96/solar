<!-- layout.blade.php -->
@extends('layout.layout')

@section('content')
    <!-- your home page content goes here -->

    <div>
        <div class="px-14 ml-10 mx-auto">
            <h1 class="font-inter font-semibold text-2xl mt-9">Customer Information</h1>
    
            <form action="">
                <div class="grid sm:grid-cols-3 grid-cols-1 gap-x-[120px]">
                    <div class="mt-7">
                        <div>
                            <label for="salutation"
                                class="block mb-4 text-sm font-medium text-[#32343A] font-inter">Salutation</label>
                            <h4 class="font-Inter text-base font-medium mb-4 ">Mr</h4>
                        </div>
                    </div>
    
                    <div class="mt-7">
                        <div>
                            <label for="first-name" class="block mb-4 text-sm font-medium text-[#32343A] font-inter">First
                                Name</label>
                            <h4 class="font-Inter text-base font-medium mb-4 ">Ishan</h4>
                        </div>
                    </div>
    
                    <div class="mt-7">
                        <div>
                            <label for="last-name" class="block mb-4 text-sm font-medium text-[#32343A] font-inter">Last
                                Name</label>
                            <h4 class="font-Inter text-base font-medium mb-4 ">Perera</h4>
                        </div>
                    </div>
                </div>
    
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-[122px]">
                    <div class="mt-6">
                        <label for="full-name" class="block mb-4 text-sm font-medium text-[#32343A] font-inter">Full
                            Name</label>
                        <h4 class="font-Inter text-base font-medium mb-4 ">Arachchi Mudiyanselage Ishan Dewmina Perera</h4>
                    </div>
    
                    <div class="mt-6">
                        <label for="address"
                            class="block mb-4 text-sm font-medium text-[#32343A] font-inter">Address</label>
                        <h4 class="font-Inter text-base font-medium mb-4 ">45/1/A, New Kandy Rd, Kandy</h4>
                    </div>
    
                    <div class="mt-6">
                        <label for="email" class="block mb-4 text-sm font-medium text-[#32343A] font-inter">Email</label>
                        <h4 class="font-Inter text-base font-medium mb-4 ">ishanperera@gmail.com</h4>
                    </div>
    
                    <div class="mt-6">
                        <label for="contact-number" class="block mb-4 text-sm font-medium text-[#32343A] font-inter">Contact
                            Number</label>
                        <h4 class="font-Inter text-base font-medium mb-4 ">0712346785</h4>
                    </div>
                </div>
            </form>
        </div>
    
        <div class="px-14 ml-10 mt-12">
            <h1 class="font-inter font-semibold text-2xl mt-9">Technical Information</h1>
    
            <form action="">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-x-[120px] mt-10">
                    <div class="flex gap-x-4">
                        <div class="pr-14">
                            <h3 class="font-inter font-medium text-sm my-1">Select</h3>
                        </div>
                        <div class="pr-2">
                            <input id="default-radio-1" type="radio" value="" name="default-radio"
                                class="w-4 h-4 text-black bg-gray-100 border-gray-300">
                            <label for="default-radio-1"
                                class="my-1 font-inter font-medium text-sm text-gray-900 dark:text-gray-300">CEB</label>
                        </div>
                        <div class="">
                            <input id="default-radio-1" type="radio" value="" name="default-radio"
                                class="w-4 h-4 text-black bg-gray-100 border-gray-300">
                            <label for="default-radio-1"
                                class="my-1 font-inter font-medium text-sm text-gray-900 dark:text-gray-300">LECO</label>
                        </div>
                    </div>
    
                    <div class="">
                        <div>
                            <label for="contact-number"
                                class="block mb-4 text-sm font-medium text-[#32343A] font-inter">Teriff</label>
                            <h4 class="font-Inter text-base font-medium mb-4 ">Genera Purpose 2 (G.P-2)</h4>
                        </div>
                    </div>
    
                    <div class="">
                        <div>
                            <label for="last-name" class="block mb-4 text-sm font-medium text-[#32343A] font-inter">Area
                                Office</label>
                            <h4 class="font-Inter text-base font-medium mb-4 ">Homagama</h4>
                        </div>
                    </div>
                    <div class="">
                        <div>
                            <label for="last-name" class="block mb-4 text-sm font-medium text-[#32343A] font-inter">Account
                                Number</label>
                            <h4 class="font-Inter text-base font-medium mb-4 ">4170002911</h4>
                        </div>
                    </div>
                </div>
            </form>
    
            <h1 class="font-inter font-semibold text-2xl mt-9">Items</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-7 sm:gap-x-0 lg:gap-x-28">
                <div class="sm:col-span-2 lg:col-span-4">
                    <div class="overflow-x-auto py-10">
                        <table class="table-auto w-full">
                            <div class="bg-[#C7BFBF] border">
                                <h4 class="text-center font-inter font-medium text-xs text-black py-2">ELECTRICAL</h4>
                            </div>
                            <thead class="bg-gray-50">
                                <tr class="font-inter text-gray-500 text-xs text-left">
                                    <th class="px-1 py-1 text-center text-gray-900">
                                        <div class="flex justify-center">
                                            <h4>#</h4>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
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
                                        DESCRIPTION
                                    </th>
                                    <th class="px-3 py-1">
                                        UNIT
                                    </th>
                                    <th class="px-3 py-1">
                                        QTY
                                    </th>
                                    <th class="px-3 py-1">
                                        TOTAL PRICE
                                    </th>
    
                                </tr>
                            </thead>
                            <tbody class="text-gray-900 font-normal text-sm border-b border-gray-200">
                                <td>
                                    <div class="flex justify-center py-2">
                                        <h4 class="text-left">1</h4>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="px-4 py-py-2 ">
                                        <a href="">
                                            <h4 class="text-left">Earth Cable 6mm</h4>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-3 py-2 ">
                                        <h4 class="text-left">m</h4>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-3 py-2 ">
                                        <h4 class="text-left">50</h4>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-3 py-2 ">
                                        <h4 class="text-left">25000</h4>
                                    </div>
                                </td>
                                <td>
                                    <div class="bg-[#333333] flex justify-center items-center border rounded-lg w-32 h-8 pt-4 pr-2 pb-4 pl-2">
                                        <button class="text-white font-inter text-sm font-medium flex justify-center items-center ">Add
                                            to invoice
                                        </button>
                                    </div>
                                </td>
                            </tbody>
    
                            <tbody class="text-gray-900 font-normal text-sm border-b border-gray-200">
                                <td>
                                    <div class="flex justify-center py-2">
                                        <h4 class="text-left">2</h4>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="px-4 py-py-2 ">
                                        <a href="">
                                            <h4 class="text-left">Earth Cable 6mm</h4>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-3 py-2 ">
                                        <h4 class="text-left">m</h4>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-3 py-2 ">
                                        <h4 class="text-left">50</h4>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-3 py-2 ">
                                        <h4 class="text-left">25000</h4>
                                    </div>
                                </td>

                                <td>
                                    <div class="bg-[#333333] flex justify-center items-center border rounded-lg w-32 h-8 pt-4 pr-2 pb-4 pl-2">
                                        <button class="text-white font-inter text-sm font-medium flex justify-center items-center ">Add
                                            to invoice
                                        </button>
                                    </div>
                                </td>
                            </tbody>
    
                        </table>
                    </div>
    
                    <div class="flex justify-center gap-x-8">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" fill="currentColor"
                                class="bi bi-arrow-left">
                                <path fill-rule="evenodd"
                                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                            </svg>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" fill="currentColor"
                                class="bi bi-arrow-right">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg>
                        </div>
                    </div>
    
                </div>

                <div class="sm:col-span-3 lg:col-span-3">
                    <div class="overflow-x-auto py-10">
                        <table class="table-auto w-full">
                            <thead class="bg-gray-50">
                                <tr class="font-inter text-gray-500 text-xs text-left">
                                    <th class="px-4 py-1">
                                        DESCRIPTION
                                    </th>
                                    <th class="px-3 py-1">
                                        VALUE
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-900 font-normal text-sm border-b border-gray-200">
                                <td>
                                    <div class="px-4 py-py-2 ">
                                        <a href="">
                                            <h4 class="text-left">Earth Cable 6mm</h4>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-3 py-2 ">
                                        <h4 class="text-left">50</h4>
                                    </div>
                                </td>
                            </tbody>
                            <tbody class="text-gray-900 font-normal text-sm border-b border-gray-200">
                                <td>
                                    <div class="px-4 py-py-2 ">
                                        <a href="">
                                            <h4 class="text-left">Earth Cable 6mm</h4>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-3 py-2 ">
                                        <h4 class="text-left">50</h4>
                                    </div>
                                </td>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="flex justify-end gap-x-2.5">
                <div
                    class="bg-[#333333] flex justify-center items-center border rounded-lg w-28     h-8 pt-4 pr-2 pb-4 pl-2">
                    <button class="text-white font-inter text-sm font-medium flex justify-center items-center ">Edit
                    </button>
                </div>
                <div
                    class="bg-[#333333] flex justify-center items-center border rounded-lg w-28     h-8 pt-4 pr-2 pb-4 pl-2">
                    <button class="text-white font-inter text-sm font-medium flex justify-center items-center ">Delete
                    </button>
                </div>
                <div
                    class="bg-[#333333] flex justify-center items-center border rounded-lg w-28     h-8 pt-4 pr-2 pb-4 pl-2">
                    <button class="text-white font-inter text-sm font-medium flex justify-center items-center ">Print PDF
                    </button>
                </div>
            </div>
        </div>
    </div>

    @endsection
