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
   
    <br></br>
    <div class="flex flex-col max-w-4xl mx-auto mt-16">
      <!-- Content -->
      <h1 class="text-center text-2xl">Rekap Mahasiswa Lulus PKL</h1><br></br>
      <div class="bg-white shadow-md rounded-lg p-8 mb-6 flex justify-center">
        <!-- Chart Element -->
        <canvas id="grafikMahasiswaLulusPKL"></canvas>
        <!-- End of Chart Element -->

      <!-- End of Content -->
    </div>

    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  </body>
  <!-- Chart Configuration -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    
    const ctx = document.getElementById("grafikMahasiswaLulusPKL");
    const myChart = new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["2022", "2021", "2020", "2019", "2018", "2017"],
        datasets: [
          {
            label: "# of Votes",
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
              "rgba(255, 99, 132, 0.2)",
              "rgba(54, 162, 235, 0.2)",
              "rgba(255, 206, 86, 0.2)",
              "rgba(75, 192, 192, 0.2)",
              "rgba(153, 102, 255, 0.2)",
              "rgba(255, 159, 64, 0.2)",
            ],
            borderColor: [
              "rgba(255, 99, 132, 1)",
              "rgba(54, 162, 235, 1)",
              "rgba(255, 206, 86, 1)",
              "rgba(75, 192, 192, 1)",
              "rgba(153, 102, 255, 1)",
              "rgba(255, 159, 64, 1)",
            ],
            borderWidth: 1,
          },
        ],
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
          },
        },
      },
    });
  </script>
  
  <!-- End of Chart Configuration -->
  <head>
    
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
  <div class="flex gap-4 overflow-scroll pb-4">
    <a
      href="pkldetail2.html"
      class="block py-2 px-8 max-w-sm bg-white rounded-full border border-gray-200 shadow-md hover:bg-gray-100 "
    >
      2012
    </a>
    <a
      href="#"
      class="block py-2 px-8 max-w-sm bg-white rounded-full border border-gray-200 shadow-md hover:bg-gray-100 "
    >
      2013
    </a>
    <a
      href="#"
      class="block py-2 px-8 max-w-sm bg-white rounded-full border border-gray-200 shadow-md hover:bg-gray-100 "
    >
      2014
    </a>
    <a
      href="#"
      class="block py-2 px-8 max-w-sm bg-white rounded-full border border-gray-200 shadow-md hover:bg-gray-100 "
    >
      2015
    </a>
    <a
      href="#"
      class="block py-2 px-8 max-w-sm bg-white rounded-full border border-gray-200 shadow-md hover:bg-gray-100 "
    >
      2016
    </a>
    <a
      href="#"
      class="block py-2 px-8 max-w-sm bg-white rounded-full border border-gray-200 shadow-md hover:bg-gray-100 "
    >
      2017
    </a>
    <a
      href="#"
      class="block py-2 px-8 max-w-sm bg-white rounded-full border border-gray-200 shadow-md hover:bg-gray-100 "
    >
      2018
    </a>
    <a
      href="#"
      class="block py-2 px-8 max-w-sm bg-white rounded-full border border-gray-200 shadow-md hover:bg-gray-100 "
    >
      2019
    </a>
    <a
      href="#"
      class="block py-2 px-8 max-w-sm bg-white rounded-full border border-gray-200 shadow-md hover:bg-gray-100 
    >
      2021
    </a>
    <a
      href="#"
      class="block py-2 px-8 max-w-sm bg-white rounded-full border border-gray-200 shadow-md hover:bg-gray-100 "
    >
      2022
    </a>
  </div>
  <body>
  <nav>
      <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">Data Mahasiswa Skripsi</span>
      </div>
      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-menu menu-icon"></i>
          <span class="logo-name">Universitas Diponegoro</span>
        </div>

        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="dashboard_dept.php" class="nav-link">
                <i class="bx bx-home-alt icon"></i>
                <span class="link">Home</span>
              </a>
            </li>
            
            <li class="list">
              <a href="data_dosen.php" class="nav-link">
                <i class="bx bx-spreadsheet icon" ></i>
                <span class="link">Data Dosen</span>
              </a>
            </li>

            <li class="list">
              <a href="data_skripsi.php" class="nav-link">
                <i class="bx bx-spreadsheet icon" ></i>
                <span class="link">Data Mahasiswa Skripsi</span>
              </a>
            </li>
           
            <div class="list"> 
             <a href="data_pkl.php" class="nav-link">
                <i class="bx bx-pie-chart-alt-2 icon"></i>
                <span class="link">Data Mahasiswa PKL</span>  
              </a>
              </a>
             </div>
            <li class="list">
              <a href="progress.php" class="nav-link">
                <i class="bx bx-paste icon" ></i>
                <span class="link">Progres Studi Mahasiswa</span>
              </a>
            </li>
            <li class="list">
              <a href="rekap_data.php" class="nav-link">
                <i class="bx bx-folder-open icon"></i>
                <span class="link">Rekap Data Mahasiswa</span>
              </a>
            </li>
          </ul>

          <div class="bottom-cotent">
            <li class="list">
              <a href="javascript:alert('still coming soon!')" class="nav-link">
                <i class="bx bx-cog icon"></i>
                <span class="link">Settings</span>
              </a>
            </li>
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
</html>


