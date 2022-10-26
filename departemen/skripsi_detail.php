<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css"
    />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  </head>
  <body>
    <!-- Navbar -->
<br>

    <!-- End of Navbar -->
    <div class="">
      <h1 class="text-4xl mx-20 my-8 mt-24">Detail Mahasiswa Skripsi (Lulus)</h1>
      <div class="overflow-x-auto mx-20 relative shadow-md sm:rounded-lg"><br><br>
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                      <th scope="col" class="py-3 px-6">
                          Nama Mahasiswa
                      </th>
                      <th scope="col" class="py-3 px-6">
                          NIM
                      </th>
                      <th scope="col" class="py-3 px-6">
                          Angkatan
                      </th>
                      <th scope="col" class="py-3 px-6">
                          Semester
                      </th>
                      <th scope="col" class="py-3 px-6">
                          IP Kumulatif
                      </th>
                      
                  </tr>
              </thead>
              <tbody>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                      <td class="py-4 px-6">
                          Stefani Anezea
                      </td>

                      <td class="py-4 px-6">
                          24060120120001
                      </td>

                      <td class="py-4 px-6">
                          2020
                      </td>

                      <td class="py-4 px-6">
                        3
                    </td>

                    <td class="py-4 px-6">
                      3.75
                  </td>
                 

                  </tr>

                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="py-4 px-6">
                      Stefani Anezea
                  </td>

                  <td class="py-4 px-6">
                      24060120120001
                  </td>

                  <td class="py-4 px-6">
                      2020
                  </td>

                  <td class="py-4 px-6">
                    3
                </td>

                <td class="py-4 px-6">
                  3.75
              </td>
                
              
            </tr>   
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="py-4 px-6">
                      Stefani Anezea
                  </td>

                  <td class="py-4 px-6">
                      24060120120001
                  </td>

                  <td class="py-4 px-6">
                      2020
                  </td>

                  <td class="py-4 px-6">
                    3
                </td>

                <td class="py-4 px-6">
                  3.75
              </td>
              
                  </tr>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="py-4 px-6">
                      Stefani Anezea
                  </td>

                  <td class="py-4 px-6">
                      24060120120001
                  </td>

                  <td class="py-4 px-6">
                      2020
                  </td>

                  <td class="py-4 px-6">
                    3
                </td>

                <td class="py-4 px-6">
                  3.75
              </td>
             
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="py-4 px-6">
                  Stefani Anezea
              </td>

              <td class="py-4 px-6">
                  24060120120001
              </td>

              <td class="py-4 px-6">
                  2020
              </td>

              <td class="py-4 px-6">
                3
            </td>

            <td class="py-4 px-6">
              3.75
          </td>
          
              </tr>
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="py-4 px-6">
                  Stefani Anezea
              </td>

              <td class="py-4 px-6">
                  24060120120001
              </td>

              <td class="py-4 px-6">
                  2020
              </td>

              <td class="py-4 px-6">
                3
            </td>

            <td class="py-4 px-6">
              3.75
          </td>
          
          </tbody>
              </tbody>
          </table>
          <!-- Edit modal -->
          <div id="editModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
              <div class="relative w-full max-w-2xl h-full md:h-auto">
                  <!-- Modal content -->
                  <form action="#" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                      <!-- Modal header -->
                      <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                              Edit Data KHS
                          </h3>
                          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="editModal">
                              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                          </button>
                      </div>
                      <!-- Modal body -->
                      
                      <!-- Modal footer -->
                      <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save Changes</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>


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
                <span class="link">Progress Studi Mahasiswa</span>
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

   <br></br>
   <div class="flex w-full justify-start mx-20 mt2">

    <a href = "skripsi_detail2.php">
     <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 p-4 rounded-full mr-2">
      
      Belum Lulus
    </button></a>
   
   </body>
   <a href = "skripsi_detail.php">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 p-4  rounded-full ml-2">
     
     Lulus
   </button></a>

  </body>
   

  </body>
 </div>
 
  </html>