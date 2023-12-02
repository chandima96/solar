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

    <div>
            <div class="px-4 sm:px-6 lg:px-8">
              <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                  <h1 class="text-base font-semibold leading-6 text-gray-900">Inventory</h1>
                  <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their name, title, email and role.</p>
                </div>
                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                  <button type="button" onclick="openAddModal()" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 hover:duration-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Add Inventory
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 inline-block">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                  </button>                  
                </div>
              </div>
              <div class="-mx-4 mt-8 sm:-mx-0 overflow-x-auto rounded-md">
                <table class="min-w-full divide-y divide-gray-300">
                  <thead>
                    <tr>
                      <th scope="col" class="relative group py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Id
                        <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible absolute bg-gray-100 border-2 text-gray-800 text-xs font-normal py-2 px-4 rounded-md mt-2 transition duration-300">
                          Description goes here.
                        </div>
                      </th>
                      <th scope="col" class="relative group py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Name
                        <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible absolute bg-gray-100 border-2 text-gray-800 text-xs font-normal py-2 px-4 rounded-md mt-2 transition duration-300">
                          Description goes here.
                        </div>
                      </th>
                      <th scope="col" class="relative group px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Unit
                        <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible absolute bg-gray-100 border-2 text-gray-800 text-xs font-normal py-2 px-4 rounded-md mt-2 transition duration-300">
                          Description goes here.
                        </div>
                      </th>
                      <th scope="col" class="relative group px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Quantity
                        <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible absolute bg-gray-100 border-2 text-gray-800 text-xs font-normal py-2 px-4 rounded-md mt-2 transition duration-300">
                          Description goes here.
                        </div>
                      </th>
                      <th scope="col" class="relative group px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Average
                        <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible absolute bg-gray-100 border-2 text-gray-800 text-xs font-normal py-2 px-4 rounded-md mt-2 transition duration-300">
                          Description Company here.
                        </div>
                      </th>
                      <th scope="col" class="relative group px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Total <br>Value
                        <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible absolute bg-gray-100 border-2 text-gray-800 text-xs font-normal py-2 px-4 rounded-md mt-2 transition duration-300">
                          Description Company here.
                        </div>
                      </th>
                      <th scope="col" class="relative group px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Total <br>Issued
                        <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible absolute bg-gray-100 border-2 text-gray-800 text-xs font-normal py-2 px-4 rounded-md mt-2 transition duration-300">
                          Description Company here.
                        </div>
                      </th>
                      <th scope="col" class="relative group px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Damaged <br>Qnt
                        <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible absolute bg-gray-100 border-2 text-gray-800 text-xs font-normal py-2 px-4 rounded-md mt-2 transition duration-300">
                          Description Company here.
                        </div>
                      </th>
                      <th scope="col" class="relative px-3 py-3.5 text-left text-sm font-semibold text-gray-900 group">
                        In stock
                        <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible absolute bg-gray-100 border-2 text-gray-800 text-xs font-normal py-2 px-4 rounded-md mt-2 transition duration-300">
                          Description goes here.
                        </div>
                      </th>
                      
                      <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                        <span class="sr-only">Edit</span>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 bg-white">
                    <tr class="hover:bg-slate-100 hover:duration-300">
                      <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">uid123</td>
                      <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">Lindsay Walton</td>
                      <td class="px-3 py-4 text-sm text-gray-500">07</td>
                      <td class="px-3 py-4 text-sm text-gray-500">lindsay</td>
                      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Metadelan</td>
                      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"></td>
                      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"></td>
                      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"></td>
                      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"></td>
                      <td class="whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                        <div class="flex">
                          <button class="text-green-600 hover:text-green-700 mx-2" onclick="openEditModal()">Edit</span></button>
                          <button class="text-red-400 hover:text-red-600"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                            </svg>
                           </button>
                        </div>
                      </td>
                    </tr>
            
                    <!-- More people... -->
                  </tbody>
                </table>
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
                    <p class="mb-8">Update Product <span class="text-green-600">Id0000</span></p>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                      <div class="relative">
                        <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Name</label>
                        <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                      </div>
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
                        <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Type</label>
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
                    </div>
                  </div>
                  
                  <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button onclick="" type="button" class="w-full inline-flex justify-center rounded-md border border-green-500 shadow-sm px-4 py-2 text-base font-medium text-green-500 hover:text-white hover:bg-green-700 hover:duration-500 focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
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

            <!-- model add  -->
            <div id="addModal" class="fixed inset-0 z-10 overflow-y-auto hidden">
              <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                  <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full">
                  <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <p class="mb-8">Add Product <span class="text-green-600">Id0000</span></p>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                      <div class="relative">
                        <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Name</label>
                        <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                      </div>
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
                    </div>
                  </div>
                  
                  <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button onclick="" type="button" class="w-full inline-flex justify-center rounded-md border border-indigo-500 shadow-sm px-4 py-2 text-base font-medium text-indigo-500 hover:text-white hover:bg-indigo-700 hover:duration-500 focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      Add
                    </button>                    
                    <button onclick="closeAddModal()" type="button" class="w-full inline-flex justify-center rounded-md border border-red-500 shadow-sm px-4 py-2 text-red-500 text-base font-medium hover:text-white hover:bg-red-600 hover:duration-500 focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                      Cancel
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- model add -->

          </div>

        <!-- success message -->
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

    // Open Add Modal
     function openAddModal() {
      document.getElementById('addModal').classList.remove('hidden');
    }

    // Close Add Modal
    function closeAddModal() {
      document.getElementById('addModal').classList.add('hidden');
    }
  </script>


@endsection