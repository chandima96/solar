
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
                  <h1 class="text-base font-semibold leading-6 text-gray-900">Supplier</h1>
                  <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their name, title, email and role.</p>
                </div>
                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                  <button type="button" onclick="openAddModal()" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 hover:duration-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Add Supplier
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
                      <th scope="col" class="relative group px-3 py-4 text-left text-sm font-semibold text-gray-900">Id
                        <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible absolute bg-gray-100 border-2 text-gray-800 text-xs font-normal py-2 px-4 rounded-md mt-2 transition duration-300">
                          Description goes here.
                        </div>
                      </th>
                      <th scope="col" class="relative group py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Name
                        <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible absolute bg-gray-100 border-2 text-gray-800 text-xs font-normal py-2 px-4 rounded-md mt-2 transition duration-300">
                          Description goes here.
                        </div>
                      </th>
                      <th scope="col" class="relative group px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Telephone
                        <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible absolute bg-gray-100 border-2 text-gray-800 text-xs font-normal py-2 px-4 rounded-md mt-2 transition duration-300">
                          Description goes here.
                        </div>
                      </th>
                      <th scope="col" class="relative group px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email
                        <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible absolute bg-gray-100 border-2 text-gray-800 text-xs font-normal py-2 px-4 rounded-md mt-2 transition duration-300">
                          Description goes here.
                        </div>
                      </th>
                      <th scope="col" class="relative group px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Company
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
                  @foreach ($suppliers as $supplier)
                    <tr class="hover:bg-slate-100 hover:duration-300">
                      <td class="whitespace-nowrap px-3 py-4 text-sm font-medium text-gray-900">{{ $supplier->id }}</td>
                      <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{ $supplier->name }}</td>
                      <td class="px-3 py-4 text-sm text-gray-500">{{ $supplier->telephone }}</td>
                      <td class="px-3 py-4 text-sm text-gray-500">{{ $supplier->email }}</td>
                      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $supplier->company }}</td>
                      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"></td>
                      <td class="whitespace-nowrap px-3 py-4 text-right text-sm font-medium sm:pr-0">
                        <div class="flex">
                          <button class="text-green-600 hover:text-green-700 mx-2" onclick="openEditModal('{{ route('suppliers.edit', ['supplier' => $supplier]) }}')">Edit</span></button>
                          <form action="{{ route('suppliers.destroy', ['supplier' => $supplier]) }}" method="post">
                            @csrf
                            @method('DELETE')
                          <button class="text-red-400 hover:text-red-600"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16" >
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                            </svg>
                           </button>
                           </form>
                        </div>
                       
                      </td>
                    </tr>
                    @endforeach
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
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                @if(isset($supplier))
                <form action="{{ route('suppliers.update', ['supplier' => $supplier]) }}" method="post">
                @csrf 
                  @method('PUT')
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <p class="mb-8">Update <span class="text-green-600">{{ $supplier->id }}</span></p>    
                      <div class="flex flex-col gap-y-6">
                        <div class="relative">
                          <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Name</label>
                          <input type="text" name="name" id="name" value="{{ $supplier->name }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                        </div>
                        <div class="relative">
                          <label for="telephone" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Telephone</label>
                          <input type="text" name="telephone" id="telephone" value="{{ $supplier->telephone }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                        </div>
                        <div class="relative">
                          <label for="email" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Email</label>
                          <input type="text" name="email" id="email" value="{{ $supplier->email }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                        </div>
                        <div class="relative">
                          <label for="company" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Company</label>
                          <input type="text" name="company" id="company" value="{{ $supplier->company }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                        </div>
                      </div>
                    <style>
                      input:focus {
                        outline:none;
                    }
                    </style>

                  </div>
                  <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button onclick="" type="submit" class="w-full inline-flex justify-center rounded-md border border-green-500 shadow-sm px-4 py-2 text-base font-medium text-green-500 hover:text-white hover:bg-green-700 hover:duration-500 focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      Update
                    </button>                    
                    <button onclick="closeEditModal()" type="button" class="w-full inline-flex justify-center rounded-md border border-red-500 shadow-sm px-4 py-2 text-red-500 text-base font-medium hover:text-white hover:bg-red-600 hover:duration-500 focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                      Cancel
                    </button>                    
                  </div>
                </div>
                @endif
                  </form>
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
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <form action="{{ route('suppliers.store') }}" method="post">
                  @csrf 
                  <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <p>add content for Lindsay Walton</p>
                    <div class="flex flex-col gap-y-6">
                      <div class="relative">
                        <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Name</label>
                        <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                      </div>
                      <div class="relative">
                        <label for="telephone" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Telephone</label>
                        <input type="text" name="telephone" id="telephone" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                      </div>
                      <div class="relative">
                        <label for="email" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Email</label>
                        <input type="text" name="email" id="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                      </div>
                      <div class="relative">
                        <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Company</label>
                        <input type="text" name="company" id="company" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                      </div>
                    </div>
                  </div>
                  
                  <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button onclick="" type="submit" class="w-full inline-flex justify-center rounded-md border border-indigo-500 shadow-sm px-4 py-2 text-base font-medium text-indigo-500 hover:text-white hover:bg-indigo-700 hover:duration-500 focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
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
                </form>
              </div>
            </div>
            <!-- model add -->

        </div>
        <script>
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