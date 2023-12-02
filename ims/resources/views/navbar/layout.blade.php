<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Scripts -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])
     
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="./tailwind3.js"></script>
</head>

<body>
                    <style>
                      input:focus {
                        outline:none;
                      }
                    </style>
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
                <ul role="list" class=" space-y-1">
                  <li>
                    <a href="#"
                      class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 hover:duration-300 group gap-x-3">
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
                      class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 hover:duration-300 group gap-x-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 shrink-0" width="16" height="16" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
                        <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0z"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
                      </svg>
                      Inventory
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 hover:duration-300 group gap-x-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 shrink-0" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
                      </svg>
                      Supplier
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 hover:duration-300 group gap-x-3">
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
                      class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 hover:duration-300 group gap-x-3">
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
                      class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md hover:text-white hover:bg-gray-800 hover:duration-300 group gap-x-3">
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
                <ul role="list" class="mt-2 space-y-1">
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
                  class="flex p-2 text-sm font-semibold leading-6 text-gray-400 rounded-md group gap-x-3 hover:bg-gray-800 hover:text-white">
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
            <!-- content -->
            @yield('content')
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
