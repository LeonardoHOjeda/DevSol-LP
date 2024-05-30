<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Reddit+Mono:wght@200..900&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <title>@yield('title')</title>
</head>
<body>
  <header>
    <nav class="bg-primary border-gray-200">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://www.devsolutions.mx" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="DevSolutions Logo" />
            <span class="text-white self-center text-2xl font-semibold whitespace-nowrap">DevSolutions MX</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-purple-300 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
          <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-purple-500 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-primary">
            <li>
              <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 aria-current="page">Inicio</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-white rounded hover:bg-purple-300 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">About</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-white rounded hover:bg-purple-300 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Services</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-white rounded hover:bg-purple-300 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Pricing</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-white rounded hover:bg-purple-300 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  
</body>
</html>