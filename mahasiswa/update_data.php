<!DOCTYPE html>
<link rel="stylesheet" href="style.css" />
<html>
<link rel ="styleshet" href="style.css"/>
  <head>
  <link rel="stylesheet" href="style.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css"
    />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  </head>
  <body>
    <!-- Navbar -->
    <link rel ="styleshet" href="style.css"/>
    <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <!--<title>Sidebar Menu | Side Navigation Bar</title>-->
      <!-- CSS -->
      
      <!-- Boxicons CSS -->
      <link
        href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
        rel="stylesheet"
      />
    </head>
    <body>
      <nav>
        <div class="logo">
          <i class="bx bx-menu menu-icon"></i>
          <span class="logo-name">Update Data Mahasiswa</span>
        </div>
        <div class="sidebar">
          <div class="logo">
            <i class="bx bx-menu menu-icon"></i>
            <span class="logo-name">Universitas Diponegoro</span>
          </div>
  
          <div class="sidebar-content">
            <ul class="lists">
              <li class="list">
                <a href="dashboard_mhs.php" class="nav-link">
                  <i class="bx bx-home-alt icon"></i>
                  <span class="link">Home</span>
                </a>
              </li>
              
              
              <li class="list">
                <a href="update_data.php" class="nav-link">
                  <i class="bx bx-spreadsheet icon" ></i>
                  <span class="link">Profil</span>
                </a>
              </li>
             
              <div class="list"> 
               <a href="inputirs.html" class="nav-link"> 
                  <i class="bx bx-pie-chart-alt-2 icon"></i>
                  <span class="link">Data IRS</span>  
                </a>
                </a>
               </div>
              <li class="list">
                <a href="inputkhs.html" class="nav-link">
                  <i class="bx bx-paste icon" ></i>
                  <span class="link">Data KHS</span>
                </a>
              </li>
              <li class="list">
                <a href="inputpkl.html" class="nav-link">
                  <i class="bx bx-folder-open icon"></i>
                  <span class="link">Data PKL</span>
                </a>
              </li>
            
            <li class="list">
              <a href="input_skripsi.html" class="nav-link">
                <i class="bx bx-folder-open icon"></i>
                <span class="link">Data Skripsi</span>
              </a>
            </li>
          </ul>
  
            <div class="bottom-cotent">
              <li class="list">
                <a href="javascript:alert('still coming soon!')" class="nav-link">
                  <i class="bx bx-log-out icon"></i>
                  <span class="link">Logout</span>
                </a>
              </li>
            </div>
          </div>
        </div>
      </nav>
  
      <section class="overlay"></section>
  
      <script>
        const navBar = document.querySelector("nav"),
          menuBtns = document.querySelectorAll(".menu-icon"),
          overlay = document.querySelector(".overlay");
  
        menuBtns.forEach((menuBtn) => {
          menuBtn.addEventListener("click", () => {
            navBar.classList.toggle("open");
          });
        });
  
        overlay.addEventListener("click", () => {
          navBar.classList.remove("open");
        });
      </script>
    </body>
    <head>

    <!-- End of Navbar -->
    <div class="flex flex-col max-w-4xl mx-auto mt-32">
      <!-- Content -->
      <form class="w-full">
        <div class="bg-white shadow-md rounded-lg p-8">
          <h1 class="text-3xl font-medium mb-8">Update Data</h1>
          <div class="flex items-start gap-12">
            <div
              class="bg-white shadow-md rounded-lg flex justify-center items-center w-36 h-48"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-20 h-20"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
                />
              </svg>
            </div>
            <!-- Button Ganti Foto, letaknya masih salah
            <div class="flex justify-left ">
              <button
                type="button"
                class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-12 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
              >
                Ganti Foto
              </button>
            </div> -->

            <div class="w-6/12">
              <div class="flex gap-10">
                <div class="mb-3 w-6/12">
                  <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Nama Lengkap</label
                  >
                  <input
                    type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  />
                </div>
                <div class="mb-3 w-6/12">
                  <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Email</label
                  >
                  <input
                    type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  />
                </div>
              </div>
              <div class="flex gap-10">
                <div class="mb-3 w-6/12">
                <label
                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                  >NIM</label
                >
                <input
                  type="text"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
                </div>
                <div class="mb-3 w-6/12">
                  <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >No. Handphone</label
                  >
                  <input
                    type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  />
                </div>
              </div>
              <div class="mb-3 w-8/12">
                <label
                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                  >Dosen Wali</label
                >
                <input
                  type="text"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
              </div>

              <div class="mb-3 w-full h-fit">
                <label
                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                  >Alamat Lengkap Mahasiswa</label
                >
                <input
                  type="text"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
              </div>

              <div class="flex gap-4 mb-6">
                <div class="w-6/12">
                  <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Provinsi</label
                  >
                  <select
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  >
                    <option selected>Pilih Provinsi</option>
                    <option value="jawa barat">Jawa Barat</option>
                    <option value="dki jakarta">DKI Jakarta</option>
                    <option value="jawa tengah">Jawa Tengah</option>
                    <option value="jawa timur">Jawa Timur</option>
                  </select>
                </div>
                <div class="w-6/12">
                  <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Kabupaten/Kota</label
                  >
                  <select
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  >
                    <option selected>Pilih Kabupaten/Kota</option>
                    <option value="bandung">Bandung</option>
                    <option value="jakarta">Jakarta</option>
                    <option value="semarang">Semarang</option>
                    <option value="surabaya">Surabaya</option>
                    <option value="yogyakarta">Yogyakarta</option>
                    <option value="solo">Solo</option>
                    <option value="bogor">Bogor</option>
                    <option value="bekasi">Bekasi</option>
                    <option value="depok">Depok</option>
                  </select>
                </div>
              </div>

              <div class="flex gap-4 mb-6">
                <div class="w-4/12">
                  <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Status</label
                  >
                  <select
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  >
                    <option selected>Pilih Status</option>
                    <option value="aktif">Aktif</option>
                    <option value="cuti">Cuti</option>
                  </select>
                </div>
                <div class="w-4/12">
                  <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Angkatan</label
                  >
                  <select
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  >
                    <option selected>Pilih Angkatan</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex justify-end mt-8 gap-2 mb-10">
          <button
            type="button"
            class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-12 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
          >
            Save
          </button>
          <button
            type="button"
            class="text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-12 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800"
          >
            < Kembali
          </button>
        </div>
      </form>
      <!-- End of Content -->
    </div>
</div>


  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>
</html>
