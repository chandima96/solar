<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="./tailwind3.js"></script>
</head>

<body>
    <div class="sidebar z-10 fixed top-0 bottom-0 lg:left-0 left-[-320px] duration-1000p-2 w-[320px] overflow-y-auto text-center bg-gray-900 shadow h-screen">
      <div>
        <div class="text-xl text-gray-100">
          <div class="p-2.5 mt-1 flex items-center rounded-md ">
            <img class="w-auto h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=500"
              alt="Your Company">
            <h1 class="text-[15px]  ml-3 text-xl text-gray-200 font-bold">Sidebar </h1>
            <i class="cursor-pointer ml-36 bi bi-x lg:hidden" onclick="Openbar()"></i>
          </div>
          <nav class="flex flex-col flex-1 mt-7">
            <ul role="list" class="flex flex-col flex-1 gap-y-7">
              <li>
                <ul role="list" class="-mx-2 space-y-1">
                  <li>
                    <a href="#"
                      class="flex p-2 text-sm font-semibold leading-6 text-white bg-gray-800 rounded-md group gap-x-3">
                      <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                      </svg>
                      Dashboard
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3">
                      <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                      </svg>
                      Team
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3">
                      <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                      </svg>
                      Projects
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3">
                      <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                      </svg>
                      Calendar
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3">
                      <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
                      </svg>
                      Documents
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3">
                      <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                      </svg>
                      Reports
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <div class="text-xs font-semibold leading-6 text-gray-400">Your teams</div>
                <ul role="list" class="mt-2 -mx-2 space-y-1">
                  <li>
                    <a href="#"
                      class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3">
                      <span
                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-700 bg-gray-800 text-[0.625rem] font-medium text-gray-400 group-hover:text-white">H</span>
                      <span class="truncate">Heroicons</span>
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3">
                      <span
                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-700 bg-gray-800 text-[0.625rem] font-medium text-gray-400 group-hover:text-white">T</span>
                      <span class="truncate">Tailwind Labs</span>
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 group gap-x-3">
                      <span
                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-700 bg-gray-800 text-[0.625rem] font-medium text-gray-400 group-hover:text-white">W</span>
                      <span class="truncate">Workcation</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="mt-auto">
                <a href="#"
                  class="flex p-2 -mx-2 text-sm font-semibold leading-6 text-gray-400 rounded-md group gap-x-3 hover:bg-gray-800 hover:text-white">
                  <svg class="w-6 h-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                  Settings
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>

    <div class="lg:pl-80">
      <div class="sticky backdrop-blur-[6px] top-0 flex items-center h-16 px-4 border-b border-gray-200 shadow-sm shrink-0 gap-x-4 sm:gap-x-6 sm:px-6 lg:px-8">
        <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden">
          <span class="absolute text-white cursor-pointer top-5 left-4" onclick="Openbar()">
            <i class="px-2 text-black bg-white rounded-md bi bi-list"></i>
          </span>
        </button>
    
        <div class="w-px h-6 bg-gray-900/10 lg:hidden" aria-hidden="true"></div>
    
        <div class="flex self-stretch flex-1 gap-x-4 lg:gap-x-6">
          <div class="relative flex flex-1" action="#" method="GET">
            <label for="search-field" class="sr-only">Search</label>
          </div>
          <div class="flex items-center gap-x-4 lg:gap-x-6">
            <button type="button" class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-500">
              <span class="sr-only">View notifications</span>
              <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </button>
    
            <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-900/10" aria-hidden="true"></div>
    
            <div class="relative">
              <button type="button" class="-m-1.5 flex items-center p-1.5" id="user-menu-button" aria-expanded="false"
                aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full bg-gray-50"
                  src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                  alt="">
                <span class="hidden lg:flex lg:items-center">
                  <span class="ml-4 text-sm font-semibold leading-6 text-black" aria-hidden="true">Tom Cook</span>
                  <svg class="w-5 h-5 ml-2 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                      d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                      clip-rule="evenodd" />
                  </svg>
                </span>
              </button>
    
              <div
                class="absolute hidden right-0 z-10 mt-2.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none"
                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" id="user-menu">
                <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1"
                  id="user-menu-item-0">Your profile</a>
                <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1"
                  id="user-menu-item-1">Sign out</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <main class="py-10">
        <div class="px-4 sm:px-6 lg:px-8">
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
                    <tr class="hover:bg-slate-100 hover:duration-300">
                      <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">uid123</td>
                      <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">Lindsay Walton</td>
                      <td class="px-3 py-4 text-sm text-gray-500">0711659004</td>
                      <td class="px-3 py-4 text-sm text-gray-500">lindsay.walton@example.com</td>
                      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Metadelan</td>
                      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"></td>
                      <td class="whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                        <div class="flex flex-col">
                          <button class="text-green-600 hover:text-green-700" onclick="openEditModal()">Edit</span></button>
                          <button class="text-red-400 hover:text-red-600 my-1">Delete</span></button>
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
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                  <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <p class="mb-8">Update <span class="text-green-600">Id0000</span></p>
                    
                      <div class="flex flex-col gap-y-6">
                        <div class="relative">
                          <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Name</label>
                          <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                        </div>
                        <div class="relative">
                          <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Telephone</label>
                          <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                        </div>
                        <div class="relative">
                          <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Email</label>
                          <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                        </div>
                        <div class="relative">
                          <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Company</label>
                          <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                        </div>
                      </div>

                    <style>
                      input:focus {
                        outline:none;
                    }
                    </style>

                  </div>
                  <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button onclick="" type="button" class="w-full inline-flex justify-center rounded-md border border-green-500 shadow-sm px-4 py-2 text-base font-medium text-green-500 hover:text-white hover:bg-green-700 hover:duration-500 focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
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
                  <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <p>add content for Lindsay Walton</p>
                    <div class="flex flex-col gap-y-6">
                      <div class="relative">
                        <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Name</label>
                        <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                      </div>
                      <div class="relative">
                        <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Telephone</label>
                        <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                      </div>
                      <div class="relative">
                        <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Email</label>
                        <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-500 placeholder:text-gray-400 sm:text-sm sm:leading-6 p-2 pt-3 focus:ring-indigo-600 focus:ring-1" placeholder="Jane Smith">
                      </div>
                      <div class="relative">
                        <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Company</label>
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
        </div>
      </main>
      </div>
    

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

</body>

</html>
