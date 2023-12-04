<!-- home.blade.php -->
@extends('navbar.layout')

@section('content')
    <!-- your home page content goes here -->

    <!-- display the success message  -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="grid grid-cols-9 gap-3">
                <div class="col-span-7">
                    <div>
                        <div class="px-4 sm:px-0">
                          <h3 class="text-base font-semibold leading-7 text-gray-900">Item name</h3>
                          <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details and application.</p>
                        </div>
                        <div class="mt-6 border-t border-gray-100">
                          <dl class="divide-y divide-gray-200">
                            <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                              <dt class="text-sm font-medium leading-6 text-gray-900">Unit avg price</dt>
                              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Margot Foster</dd>
                            </div>
                            <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                              <dt class="text-sm font-medium leading-6 text-gray-900">Total Qnt Price</dt>
                              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Backend Developer</dd>
                            </div>
                            <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                              <dt class="text-sm font-medium leading-6 text-gray-900">Total Issued</dt>
                              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">margotfoster@example.com</dd>
                            </div>
                            <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                              <dt class="text-sm font-medium leading-6 text-gray-900">Total damaged</dt>
                              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">$120,000</dd>
                            </div>
                            <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                              <dt class="text-sm font-medium leading-6 text-gray-900">About</dt>
                              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.</dd>
                            </div>
                            
                          </dl>
                        </div>
                      </div>
                      <!-- Table -->
                      <div class="-mx-4 mt-8 sm:-mx-0 overflow-x-auto rounded-md">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead>
                              <tr>
                                <th scope="col" class="whitespace-nowrap py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Id</th>
                                <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">price</th>
                                <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">quantity</th>
                                <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">available_quantity</th>
                                <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Price</th>
                                <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Type</th>
                                <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Supplier</th>
                                <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Brand</th>
                                <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Description</th>
                                <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Date</th>
                                <th scope="col" class="relative whitespace-nowrap py-3.5 pl-3 pr-4 sm:pr-0">
                                  <span class="sr-only">Edit</span>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                              <tr>
                                <td class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-gray-500 sm:pl-0">AAPS0L</td>
                                <td class="whitespace-nowrap px-2 py-2 text-sm font-medium text-gray-900">Chase &amp; Co.</td>
                                <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-900">CAC</td>
                                <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">+$4.37</td>
                                <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">$3,509.00</td>
                                <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">12.00</td>
                                <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">$4,397.00</td>
                                <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">$4,397.00</td>
                                <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">$4,397.00</td>
                                <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">$4,397.00</td>
                                <td class="relative whitespace-nowrap py-2 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                  <a href="#" class="text-indigo-600 hover:text-indigo-900" onclick="openEditModal()">Edit<span class="sr-only">, AAPS0L</span></a>
                                </td>
                              </tr>
                  
                              <!-- More transactions... -->
                            </tbody>
                          </table>
                      </div>
                      
                </div>
                <!-- col two -->
                <div class="col-span-2">
                    <div class="lg:col-start-3 lg:row-end-1">
                        <h2 class="sr-only">Summary</h2>
                        <div class="rounded-lg bg-gray-50 shadow-sm ring-1 ring-gray-900/5">
                          <dl class="flex flex-wrap">
                            <div class="flex-auto pl-6 pt-6">
                              <dt class="text-sm font-semibold leading-6 text-gray-900">Total Amount</dt>
                              <dd class="mt-1 text-base font-semibold leading-6 text-gray-900">$10,560.00</dd>
                            </div>
                            <div class="flex-none self-end px-6 pt-4">
                              <dt class="sr-only">Status</dt>
                              <dd class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Paid</dd>
                            </div>
                            <div class="mt-6 flex w-full flex-none gap-x-4 border-t border-gray-900/5 px-6 pt-6">
                              <dt class="flex-none">
                                <span class="sr-only">Client</span>
                                <svg class="h-6 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z" clip-rule="evenodd" />
                                </svg>
                              </dt>
                              <dd class="text-sm font-medium leading-6 text-gray-900">Alex Curren</dd>
                            </div>
                            <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
                              <dt class="flex-none">
                                <span class="sr-only">Due date</span>
                                <svg class="h-6 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                  <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
                                </svg>
                              </dt>
                              <dd class="text-sm leading-6 text-gray-500">
                                <time datetime="2023-01-31">January 31, 2023</time>
                              </dd>
                            </div>
                            <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
                              <dt class="flex-none">
                                <span class="sr-only">Status</span>
                                <svg class="h-6 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M2.5 4A1.5 1.5 0 001 5.5V6h18v-.5A1.5 1.5 0 0017.5 4h-15zM19 8.5H1v6A1.5 1.5 0 002.5 16h15a1.5 1.5 0 001.5-1.5v-6zM3 13.25a.75.75 0 01.75-.75h1.5a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75zm4.75-.75a.75.75 0 000 1.5h3.5a.75.75 0 000-1.5h-3.5z" clip-rule="evenodd" />
                                </svg>
                              </dt>
                              <dd class="text-sm leading-6 text-gray-500">Paid with MasterCard</dd>
                            </div>
                          </dl>
                          <div class="mt-6 border-t border-gray-900/5 px-6 py-3">
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Download receipt <span aria-hidden="true">&rarr;</span></a>
                          </div>
                        </div>
                      </div>
                      
                </div>
            </div>

                              <!-- model Update -->
                              <div id="editModal" class="fixed inset-0 z-10 overflow-y-auto hidden">
                    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                      <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                      </div>
                      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                          <p class="mb-8">Add Product <span class="text-green-600">Id0000</span></p>
                          <div class="grid grid-cols-2 gap-3">
                            <div class="relative">
                              <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Name</label>
                              <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                            </div>
                            <div class="relative">
                              <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Des</label>
                              <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                            </div>
                          </div>
                          <p class="mb-8">Add batch</p>
                          <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                            <div class="relative">
                              <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Quantity</label>
                              <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                            </div>
                            <div class="relative">
                              <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Unit Price</label>
                              <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                            </div>
                            <div class="relative">
                              <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Type</label>
                              <select id="location" name="location" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1">
                                <option>United States</option>
                                <option selected>Canada</option>
                                <option>Mexico</option>
                              </select>
                            </div>
                            <div class="relative">
                              <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Supplier</label>
                              <select id="location" name="location" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1">
                                <option>United States</option>
                                <option selected>Canada</option>
                                <option>Mexico</option>
                              </select>
                            </div>
                            <div class="relative">
                              <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Brand</label>
                              <select id="location" name="location" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1">
                                <option>United States</option>
                                <option selected>Canada</option>
                                <option>Mexico</option>
                              </select>
                            </div>
                            <div class="relative">
                              <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Damaged Quantity</label>
                              <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                            </div>
                            <div class="relative">
                              <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Description</label>
                              <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                            </div>
                          </div>
                        </div>
      
                        
                        
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                          <button onclick="" type="button" class="w-full inline-flex justify-center rounded-md border border-indigo-500 shadow-sm px-4 py-2 text-base font-medium text-indigo-500 hover:text-white hover:bg-indigo-700 hover:duration-500 focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 mr-2">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Add
                          </button>                    
                          <button onclick="closeEditModal()" type="button" class="w-full inline-flex justify-center rounded-md border border-red-500 shadow-sm px-4 py-2 text-red-500 text-base font-medium hover:text-white hover:bg-red-600 hover:duration-500 focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 mr-2">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            Cancel
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- model Update -->
      <div id="successMessage" class="fixed top-0 right-0 mt-12 mr-10 bg-white text-sm text-green-600 p-1 rounded shadow-md transform translate-x-full opacity-0 transition-transform duration-500 ease-in-out">
        <div class="flex gap-2 items-center">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
              <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"/>
              <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
            </svg>
          </div>
          <div>Action was successful.</div>
        </div>
      </div>
      
      <script>
        // Show and hide success message
        document.addEventListener('DOMContentLoaded', function () {
          const successMessage = document.getElementById('successMessage');
      
          // Show message
          successMessage.style.transform = 'translateX(0)';
          successMessage.style.opacity = '1';
      
          // Hide message after 2 seconds
          setTimeout(() => {
            successMessage.style.transform = 'translateX(100%)';
            successMessage.style.opacity = '0';
          }, 2000);
        });
      </script>
    

  <script>
    var button = document.getElementById("user-menu-button");
    var dropdown = document.getElementById("user-menu");

    button.addEventListener("click", function () {
      dropdown.classList.toggle("hidden");
    });

    document.addEventListener("click", function (event) {
      if (!button.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.classList.add("hidden");
      }
    });
    function Openbar() {
      document.querySelector('.sidebar').classList.toggle('left-[-320px]')
    }


     // Open Update Modal
     function openEditModal() {
      document.getElementById('editModal').classList.remove('hidden');
    }

    // Close Update Modal
    function closeEditModal() {
      document.getElementById('editModal').classList.add('hidden');
    }

  </script>


@endsection