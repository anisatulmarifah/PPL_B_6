<?php
session_start();

require_once('../db_login.php');
$nim = $_SESSION['nim'];

$query = "SELECT * FROM data_mahasiswa WHERE nim = $nim";
$result = $db->query($query);
$mahasiswa = $result->fetch_object();



// if ($result->num_rows > 0) {
//     $row = $result->fetch_object();
//     $email = $row->email;
//     $no_hp = $row->nomor_hp;
//     $doswal = $row->doswal;
//     $alamat = $row->alamat;
//     $provinsi = $row->provinsi;
//     $kab_kota = $row->kabupaten_kota;
// } else {
//     $email = '';
//     $no_hp = '';
//     $doswal = '';
//     $alamat = '';
//     $provinsi = '';
//     $kab_kota = '';
// }

?>
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

    <!-- End of Navbar -->
    <div class="flex flex-col max-w-4xl mx-auto mt-32">
      <!-- Content -->
      <form class="w-full" method="POST" action="post_update.php">
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
                    type="text" value="<?= $mahasiswa->nama ?>" readonly
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
                    value="<?= $mahasiswa->email ?>"
                    id="email" name="email",
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
                  type="text" name="nim" value="<?= $mahasiswa->nim ?>" readonly
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
                    id="nomor_hp" name="nomor_hp" value="<?= $mahasiswa->nomor_hp ?>"
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
                  id="doswal" name="doswal" value="<?= $mahasiswa->doswal ?>" readonly
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
                  id="alamat" name="alamat" value="<?= $mahasiswa->alamat ?>"
                  class="p-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
              </div>

              <div class="flex gap-4 mb-6">
                <div class="w-6/12">
                  <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Provinsi</label
                  >
                  <select
                    id="provinsi" name="provinsi",
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  >
                    <option default>Pilih Provinsi</option>
                    <option <?= ($mahasiswa->provinsi =='jawa barat') ? 'selected' : '' ?> value="jawa barat">Jawa Barat</option>
                    <option <?= ($mahasiswa->provinsi =='jawa tengah') ? 'selected' : '' ?> value="jawa tengah">Jawa Tengah</option>
                    <option <?= ($mahasiswa->provinsi =='jawa timur') ? 'selected' : '' ?> value="jawa timur">Jawa Timur</option>
                    <option <?= ($mahasiswa->provinsi =='dki jakarta') ? 'selected' : '' ?> value="dki jakarta">DKI Jakarta</option>
                  </select>
                </div>
                <div class="w-6/12">
                  <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Kabupaten/Kota</label
                  >
                  <select
                    id="kabupaten_kota" name="kabupaten_kota",
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  >
                    <option default>Pilih Kabupaten/Kota</option>
                    <option <?= ($mahasiswa->kabupaten_kota == 'bandung') ? 'selected' : '' ?> value="bandung">Bandung</option>
                    <option <?= ($mahasiswa->kabupaten_kota == 'bekasi') ? 'selected' : '' ?> value="bekasi">Bekasi</option>
                    <option <?= ($mahasiswa->kabupaten_kota == 'bogor') ? 'selected' : '' ?> value="bogor">Bogor</option>
                    <option <?= ($mahasiswa->kabupaten_kota == 'depok') ? 'selected' : '' ?> value="depok">Depok</option>
                    <option <?= ($mahasiswa->kabupaten_kota == 'jakarta') ? 'selected' : '' ?> value="jakarta">Jakarta</option>
                    <option <?= ($mahasiswa->kabupaten_kota == 'semarang') ? 'selected' : '' ?> value="semarang">Semarang</option>
                    <option <?= ($mahasiswa->kabupaten_kota == 'surabaya') ? 'selected' : '' ?> value="surabaya">Surabaya</option>
                    <option <?= ($mahasiswa->kabupaten_kota == 'yogyakarta') ? 'selected' : '' ?> value="yogyakarta">Yogyakarta</option>
                    <option <?= ($mahasiswa->kabupaten_kota == 'solo') ? 'selected' : '' ?> value="solo">Solo</option>
                  </select>
                </div>
              </div>

              <div class="flex gap-4 mb-6">
                <div class="w-4/12">
                  <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Status</label
                  >
                  <input
                    type="text" name="status" value="<?= $mahasiswa->status ?>"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  />
                </div>
                <div class="w-4/12">
                  <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Angkatan</label
                  >
                  <input
                    type="text" name="angkatan" value="<?= $mahasiswa->angkatan ?>"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex justify-end mt-8 gap-2 mb-10">
          <button
            type="submit"
            class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-12 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
          >
            Save
          </button>
          <a href="dashboard_mhs.php"
            type="button"
            class="text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-12 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800"
          >
            < Kembali
          </a>
        </div>
      </form>
      <!-- End of Content -->
    </div>
</div>


  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>
</html>
