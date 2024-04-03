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
    
            <h1 class="font-inter font-semibold text-2xl mt-9 mb-6">Payment</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7 text-center font-inter font-semibold text-2xl text-[#2E2A2A] mt-10">
                <div class="bg-[#FFFAFA] w-full w-[370px] h-[87px] py-7 px-5 border border-[#FFFAFA] rounded-lg shadow-md">
                    <h3>Total Amount: xxxxxxx</h3>
                </div>
                <div class="bg-[#FFFAFA] w-full w-[370px] h-[87px] py-7 px-5 border border-[#FFFAFA] rounded-lg shadow-md">
                    <h3>Remaining Amount: xxxxxxx</h3>
                </div>
                <div class="bg-[#FFFAFA] w-full w-[370px] h-[87px] py-7 px-5 border border-[#FFFAFA] rounded-lg shadow-md">
                    <h3>Remaining Amount: xxxxxxx</h3>
                </div>
            </div>
            
    
            <h1 class="font-inter font-semibold text-2xl mt-20">List of Quotations</h1>
            <div class="overflow-x-auto mt-12">
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
                                <a href="/src/Page-Inventry-Items.html">
                                    <h4 class="text-left">**********************</h4>
                                </a>
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
                                <a href="/src/Page-Inventry-Items.html">
                                    <h4 class="text-left">**********************</h4>
                                </a>
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
                    </tbody>
                </table>
            </div>
    
            <h1 class="font-inter font-semibold text-2xl mt-20">List of Invoices</h1>
            <div class="overflow-x-auto py-12">
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
                                <a href="/src/Page-Inventry-Items.html">
                                    <h4 class="text-left">**********************</h4>
                                </a>
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
                                <a href="/src/Page-Inventry-Items.html">
                                    <h4 class="text-left">**********************</h4>
                                </a>
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
                    </tbody>
                </table>
            </div>
    
        </div>
    </div>

    @endsection
