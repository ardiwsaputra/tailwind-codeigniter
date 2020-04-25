<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700" rel="stylesheet" />
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
  <title>Laundry</title>
</head>

<body style="font-family: 'Source Sans Pro', sans-serif">
  <nav class="flex items-center justify-between flex-wrap bg-white-100 p-6 shadow">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
      <a href="<?php echo base_url() ?>" class="font-semibold text-xl tracking-tight text-purple-600">Laundry</a>
    </div>
    <div class="block lg:hidden">
      <button
        class="flex items-center px-3 py-2 border rounded text-purple-400 border-purple-600 hover:text-grey-900 hover:border-white"
        onclick="showhide()">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>
    <div id="menu" class="hidden lg:block">
      <a href="<?php echo site_url('/customers') ?>"
        class="inline-block text-sm px-4 py-2 leading-none border rounded text-grey-900 border-white hover:border-transparent hover:text-purple-600 hover:bg-white mt-4 lg:mt-0">Panduan
        Penggunaan</a>
      <a href="#"
        class="inline-block text-sm px-4 py-2 leading-none border rounded text-grey-900 font-bold border-white hover:border-transparent hover:text-purple-600 hover:bg-white mt-4 lg:mt-0">Customer
        Service</a>
    </div>
    </div>
  </nav>
  <div>
    <div class="flex justify-between flex-wrap">
      <div class="w-full md:w-1/2 md:h-screen h-full px-6 p-10">
        <div class="container mx-auto px-6 py-20 flex justify-center">
          <div class="w-full max-w-xs">
            <form class="bg-white rounded px-8 pt-6 pb-8 mb-4">
              <div class="mb-4">
                <h2 class="mb-6 text-4xl font-bold text-center text-grey-900">
                  Selamat Datang
                </h2>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                  Nama Akun
                </label>
                <input
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="username" type="text" placeholder="Masukan nama akun anda">
              </div>
              <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                  Kata Sandi
                </label>
                <input
                  class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                  id="password" type="password" placeholder="Masukan kata sandi">
                <p class="text-red-500 text-xs italic">Tolong isi kolom kata sandi.</p>
              </div>
              <div class="flex items-center justify-between">
                <a class="inline-block align-baseline text-sm text-grey-400 hover:text-purple-600" href="#">
                  Lupa Kata Sandi ?
                </a>
                <button
                  class="bg-purple-400 hover:bg-purple-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                  type="button"
                  >
                  Masuk
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 md:h-screen h-full">
        <img src="<?php echo base_url()?>/assets/bg-image.svg" alt="Monitoring" class="w-full" />
      </div>
    </div>
  </div>
</body>

</html>

<script type="text/javascript">
  function showhide() {
    document.getElementById("menu").setAttribute("class", (document.getElementById("menu").getAttribute("class") == "hidden lg:block") ? "block lg:hidden" : "hidden lg:block");
  }
</script>