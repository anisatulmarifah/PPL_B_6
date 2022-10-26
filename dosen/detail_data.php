<!DOCTYPE html>
<html>
  <head>
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<title>Sidebar Menu | Side Navigation Bar</title>-->
    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
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
        <span class="logo-name">Data Mahasiswa</span>
      </div>
      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-menu menu-icon"></i>
          <span class="logo-name">Universitas Diponegoro</span>
        </div>

        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="dashboard_dosen.php" class="nav-link">
                <i class="bx bx-home-alt icon"></i>
                <span class="link">Home</span>
              </a>
            </li>
            
            
            <li class="list">
              <a href="data_mahasiswa.php" class="nav-link">
                <i class="bx bx-spreadsheet icon" ></i>
                <span class="link">Data Mahasiswa </span>
              </a>
            </li>
          
            <div class="list"> 
            <a href="verifikasi_data.php" class="nav-link"> 
                <i class="bx bx-pie-chart-alt-2 icon"></i>
                <span class="link">Verifikasi</span>  
              </a>
              </a>
            </div>
            <li class="list">
              <a href="progress.php" class="nav-link">
                <i class="bx bx-paste icon" ></i>
                <span class="link">Progress Studi Mahasiswa</span>
              </a>
            </li>
            <li class="list">
              <a href="data_pkl.php" class="nav-link">
                <i class="bx bx-folder-open icon"></i>
                <span class="link">Data Mahasiswa PKL</span>
              </a>
            </li>
            <li class="list">
              <a href="data_skripsi.php" class="nav-link">
                <i class="bx bx-folder-open icon"></i>
                <span class="link">Data Mahasiswa Skripsi</span>
              </a>
            </li>
          </ul>

          <div class="bottom-cotent">
            <li class="list">
              <a href="../logout.php" class="nav-link">
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

    <!-- End of Navbar -->
    <div class="flex flex-col max-w-4xl mx-auto mt-16">
      <!-- Content -->
      <br>
      <br>
      <br>
      <form class="w-full">
        <h1 class="text-3xl font-medium mb-8">Detail Data Mahasiswa</h1>
        <div class="bg-white shadow-md rounded-lg p-8 border">
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
            <div class="w-6/12">
                <div class="mb-6">
                <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Nama</label
                >
                <input
                    type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                />
                </div>
                <div class="flex gap-4 mb-6">
                <div class="mb-6 w-6/12">
                    <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >NIM</label
                    >
                    <input
                    type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    />
                </div>
                <div class="mb-6 w-6/12">
                    <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Semester</label
                    >
                    <input
                    type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    />
                </div>
                </div>
                <div class="flex gap-4 mb-6">
                <div class="bg-slate-100 shadow-md rounded-lg flex justify-center items-center w-56 h-10">
                    <div>Isian Rancangan Studi</div>
                </div>
                <div class="bg-slate-100 shadow-md rounded-lg flex justify-center items-center w-56 h-10">
                    <div>PKL</div>
                </div>
                </div>
                <div class="flex gap-4 mb-6">
                <div class="bg-slate-100 shadow-md rounded-lg flex justify-center items-center w-56 h-10">
                    <div>Kartu Hasil Studi</div>
                </div>
                <div class="bg-slate-100 shadow-md rounded-lg flex justify-center items-center w-56 h-10">
                    <div>Skripsi</div>
                </div>
                </div>
            </div>
            </div>
            <div class="flex gap-x-96">
            <div class="flex justify-start mt-8">
                <text class="text-red-600">*IRS belum diisi!</text>
            </div>
            <div class="flex justify-end mt-8">
                <button
                type="button"
                class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-12 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                >
                Save
                </button>
            </div>
            </div>
            <div class="flex justify-start -my-5">
            <text class="text-red-600">*IRS belum disetujui dosen wali!</text>
            </div>
        </div>
      </form>
      <!-- End of Content -->
    </div>

    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  </body>
</html>