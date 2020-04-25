<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <title>Laundry</title>
  </head>
  <body style="font-family: 'Source Sans Pro', sans-serif;">
    <nav
      class="flex items-center justify-between flex-wrap bg-white-100 p-6 shadow"
    >
      <div class="flex items-center flex-shrink-0 text-white mr-6">
        <a href="<?php echo base_url() ?>" class="font-semibold text-xl tracking-tight text-purple-600"
          >Laundry</a
        >
      </div>
      <div class="block lg:hidden">
        <button
          class="flex items-center px-3 py-2 border rounded text-purple-400 border-purple-600 hover:text-grey-900 hover:border-white"
          onclick="showhide()"
        >
          <svg
            class="fill-current h-3 w-3"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
          </svg>
        </button>
      </div>
      <div id="menu" class="hidden lg:block">
        <a
          href="#"
          class="inline-block text-sm px-4 py-2 leading-none border rounded text-grey-900 border-white hover:border-transparent hover:text-purple-600 hover:bg-white mt-4 lg:mt-0"
          >Tambah Pesanan</a
        >
        <a
          href="#"
          class="inline-block text-sm px-4 py-2 leading-none border rounded text-grey-900 font-bold border-white hover:border-transparent hover:text-purple-600 hover:bg-white mt-4 lg:mt-0"
          >Tambah Pelanggan</a
        >
        <a
          href="#"
          class="inline-block text-sm px-4 py-2 leading-none border rounded text-grey-900 border-white hover:border-transparent hover:text-purple-600 hover:bg-white mt-4 lg:mt-0"
          >Tambah Layanan</a
        >
        <a
          href="#"
          class="inline-block text-sm px-4 py-2 leading-none border rounded text-grey-900 border-white hover:border-transparent hover:text-purple-600 hover:bg-white mt-4 lg:mt-0"
          >Tambah Pengeluaran</a
        >
        <a
          href="#"
          class="inline-block text-sm px-4 py-2 leading-none border rounded text-grey-900 border-white hover:border-transparent hover:text-purple-600 hover:bg-white mt-4 lg:mt-0"
          >Analisis Laporan</a
        >
      </div>
      <div id="avatar" class="hidden lg:block">
        <div class="w-8 h-8 relative">
          <div
            class="group w-full h-full rounded-full overflow-hidden shadow-inner text-center bg-purple table cursor-pointer"
          >
            <span
              class="hidden group-hover:table-cell text-white font-bold align-middle"
              >Jhon Doe</span
            >
            <img
              src="https://pickaface.net/gallery/avatar/unr_random_180410_1905_z1exb.png"
              alt="lovely avatar"
              class="object-cover object-center w-full h-full visible group-hover:hidden"
            />
          </div>
        </div>
      </div>
    </nav>
    <div class="flex flex-wrap mb-4 mx-auto px-6 py-5">
      <div class="w-full md:w-3/4 py-2 md:px-5 shadow mb-5">
        <h6 class="mb-6 text-2xl text-left text-grey-900">
          Data Pelanggan Anda
        </h6>
        <div class="mb-4 flex justify-between">
          <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="customer_name"
            type="text"
            placeholder="Pencarian"
          />
          <button
            class="flex-shrink-0 bg-purple-400 hover:bg-purple-600 border-purple-400 hover:border-purple-600 text-sm border-4 text-white py-1 px-2 rounded ml-5"
            type="button"
          >
            Cari
          </button>
        </div>
        <table class="table-auto w-full mb-5">
          <thead>
            <tr>
              <th class="px-4 py-2 text-left">No</th>
              <th class="px-4 py-2 text-left">Nama</th>
              <th class="px-4 py-2 text-left">Nomor Handphone</th>
              <th class="px-4 py-2 text-left">Alamat</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border px-4 py-2">1</td>
              <td class="border px-4 py-2">Sultan Arif M</td>
              <td class="border px-4 py-2">08123422122</td>
              <td class="border px-4 py-2">
                Jalan Tigaraksa No.12 Kecamatan Merindu
              </td>
            </tr>
            <tr class="bg-gray-100">
              <td class="border px-4 py-2">2</td>
              <td class="border px-4 py-2">Sultan Arif M</td>
              <td class="border px-4 py-2">08123422122</td>
              <td class="border px-4 py-2">
                Jalan Tigaraksa No.12 Kecamatan Merindu
              </td>
            </tr>
            <tr>
              <td class="border px-4 py-2">3</td>
              <td class="border px-4 py-2">Sultan Arif M</td>
              <td class="border px-4 py-2">08123422122</td>
              <td class="border px-4 py-2">
                Jalan Tigaraksa No.12 Kecamatan Merindu
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="w-full md:w-1/4 h-12 py-2 md:px-5 shadow mb-20">
        <h6 class="mb-6 text-2xl text-left text-grey-900">
          Tambah Pelanggan Baru
        </h6>
        <div class="mb-4">
          <label
            class="block text-gray-700 text-sm font-bold mb-2"
            for="customer_name"
          >
            Nama Pelanggan
          </label>
          <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="customer_name"
            type="text"
            placeholder="Masukan nama pelanggan"
          />
        </div>
        <div class="mb-4">
          <label
            class="block text-gray-700 text-sm font-bold mb-2"
            for="phone_number"
          >
            Nomor Handphone
          </label>
          <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="phone_number"
            type="text"
            placeholder="Masukan nomor Handphone pelanggan"
          />
        </div>
        <div class="mb-4">
          <label
            class="block text-gray-700 text-sm font-bold mb-2"
            for="customer_address"
          >
            Alamat Pelanggan
          </label>
          <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="customer_address"
            type="text"
            placeholder="Masukan alamat pelanggan"
          />
        </div>
        <div class="flex items-center justify-center mb-5">
          <button
            class="bg-purple-400 hover:bg-purple-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            type="button"
          >
            Simpan Perubahan
          </button>
        </div>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
  function showhide() {
    document
      .getElementById("menu")
      .setAttribute(
        "class",
        document.getElementById("menu").getAttribute("class") ==
          "hidden lg:block"
          ? "block lg:hidden"
          : "hidden lg:block"
      );
  }
</script>
