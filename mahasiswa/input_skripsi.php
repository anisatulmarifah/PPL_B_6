<?php
session_start();

require_once('../db_login.php');
// if (!isset($_SESSION['nim'])){
//   header('Location: ../login.php');
// }

$nim = $_SESSION['nim'];

$query = "SELECT * FROM data_mahasiswa WHERE nim = $nim";
$result = $db->query($query);

$mahasiswa = $result->fetch_object();
?>

<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="style.css" />
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>
  <!-- Navbar -->
  
  <!-- End of Navbar -->
  <div class="">
    <!-- Content -->
    
    <h1 class="text-4xl mt-24 mx-32 mb-2 my-8">Input Progress Skripsi</h1>
    <form class="grid grid-cols-12 gap-4 mx-28">
      <div class="p-5 col-span-8">
        <div class="bg-white shadow-md rounded-lg p-8">
          <div class="flex items-start gap-12">
            <div class="flex">
            <img class="w-32 h-32 border-2 rounded-full" src="https://data.whicdn.com/images/357926627/original.jpg" alt="foto mahasiswa"></img>
            </div>
            <div class="w-6/12">
              <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Lengkap</label>
                <input value="<?= $mahasiswa->nama ?>" type="text" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
              </div>
              <div>
                <label class="block mt-4 mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">NIM</label>
                <input name="nim" value=<?= $nim ?> type="text" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
              </div>
              <div class="mb-2 w-full">
                  <label
                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                  >Status Skripsi</label
                  >
                  <select
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  >
                  <option selected>Pilih Status</option>
                  <option value="lulus">Lulus</option>
                  <option value="belum lulus">Belum Lulus</option>
                  </select>
              </div>
              <div class="mb-2 w-full">
                <label
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >Nilai Skripsi</label
                >
                <select
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
                <option selected>Pilih Nilai</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
                <option value="d">D</option>
                <option value="e">E</option>
                </select>
              </div>
              <div class="mb-2 w-full">
                <label
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >Lama Studi (semester)</label
                >
                <select
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
                <option selected>Pilih Semester</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                </select>
              </div>
              <div class="mb-2 w-full">
                  <label
                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                  >Tanggal Sidang</label>
                  <input
                  type="date"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  />
                  </select>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="p-5 col-span-4">
        <div class="bg-white shadow-md rounded-lg p-8">
          <h1 class="text-xl text-center font-medium mb-8">Upload Berita Acara Sidang Skripsi</h1>
          <div class="flex justify-center items-center w-full">
            <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col justify-center items-center pt-5 pb-6">
                    <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                </div>
                <input id="dropzone-file" type="file" class="hidden" />
            </label>
          </div>
        </div>
        <div class="flex justify-end mt-8">
          <button type="button"
            class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-12 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Save
          </button>
        </div>
      </div>
    </form>
    <!-- End of Content -->
  </div>
  <head>
    
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
        <span class="logo-name">Data Skripsi</span>
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
             <a href="inputirs.php" class="nav-link"> 
                <i class="bx bx-pie-chart-alt-2 icon"></i>
                <span class="link">Data IRS</span>  
              </a>
              </a>
             </div>
            <li class="list">
              <a href="inputkhs.php" class="nav-link">
                <i class="bx bx-paste icon" ></i>
                <span class="link">Data KHS</span>
              </a>
            </li>
            <li class="list">
              <a href="inputpkl.php" class="nav-link">
                <i class="bx bx-folder-open icon"></i>
                <span class="link">Data PKL</span>
              </a>
            </li>
          
          <li class="list">
            <a href="input_skripsi.php" class="nav-link">
              <i class="bx bx-folder-open icon"></i>
              <span class="link">Data Skripsi</span>
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
  <head>

  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>

</html>