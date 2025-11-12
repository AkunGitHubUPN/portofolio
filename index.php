<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3D Card Carousel</title>
  <link rel="stylesheet" href="utama.css">
  <link rel="stylesheet" href="identity.css">
  <link rel="stylesheet" href="porto.css">
  <link rel="stylesheet" href="contact.css">
</head>

<body>


  <main class="wadah-besar">

    <nav>
      <ul class="nav-links">
        <li><a href="#apa">HOME</a></li>
        <li><a href="#identity">IDENTITY</a></li>
        <li><a href="#porto">PORTOFOLIO</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </nav>

    <section class="page apa" id="apa">
      <div class="parent">
        <div class="child1">
          <img class="hero" src="assets/Hero.png" height="90%">
        </div>
        <div class="child2">
          <h1>HELLO THERE!<br>I’M NOBEL</h1>
        </div>
      </div>
    </section>


    <section class="page identity" id="identity">
      <div class="identity1">
        <h1>WHAT AM I??</h1>
        <div class="intro-headline">
          <span class="static-text">I'M A</span>

          <div class="rotating-text-wrapper" id="wordWrapper">
            <ul class="word-list" id="wordList">
              <li>STUDENT</li>
              <li>PODCASTER</li>
              <li>GRAPHIC <br>DESIGNER</li>
              <li>PROJECT <br>MANAGER</li>
              <li>PUBLIC <br>RELATIONS</li>
              <li>SYSTEM <br>ANALYST</li>
              <li>UI/UX <br>DESIGNER</li>
              <li>VIDEO <br>EDITOR</li>
              <li>TECH <br>ENTHUSIAST</li>
              <li>ULTRAMAN, <br>AND MANY MORE</li>
              <li>STUDENT</li>
            </ul>
          </div>
        </div>
        <h3 class="click-prompt" id="clickPromptText">That's<br>it??</h3>
      </div>

      <h1 class="about-me">ABOUT ME</h1>

    </section>


    <section class="page porto" id="porto">
      <div class="sticky-side">
        <h1>MY PROJECTS</h1>
        <p>Pekerjaan saya terdahulu.</p>
        <img src="assets/Group 2.png" alt="">
      </div>
      <div class="moving-side">
        <?php
        $projects = [
          [
            "image" => "assets/porto6.png",
            "title" => "Jejak Pena",
            "date" => "November 2025",
            "description" => "Perancangan dan pengembangan aplikasi diary digital untuk mencatat dan mendokumentasikan perjalanan liburan.",
            "link" => ["https://drive.google.com/drive/folders/1fO2r3z2q_kRzw7sVHewgrBK_b3w8Q3zu?usp=drive_link", "https://github.com/AkunGitHubUPN/MobileTA"]
          ],
          [
            "image" => "assets/porto7.png",
            "title" => "Direktori Dosen",
            "date" => "Oktober 2025",
            "description" => "Pengembangan WebApp PHP untuk menampilkan data dosen secara lengkap dengan review dan penilaian dari Mahasiswa, juga Admin dengan fungsi moderasi dan CRUD.",
            "link" => "https://github.com/AkunGitHubUPN/DirektoriDosen"
          ],
          [
            "image" => "assets/porto8.png",
            "title" => "Pesan Yuk!",
            "date" => "September 2025",
            "description" => "Pengembangan mobile app Flutter untuk penjualan makanan secara online.",
            "link" => "https://github.com/AkunGitHubUPN/Kuis_124230114"
          ],
          [
            "image" => "assets/porto3.png",
            "title" => "DanaTani",
            "date" => "Juli 2025",
            "description" => "Perancangan perangkat lunak pendukung sistem informasi pendanaan usaha mikro di bidang pertanian berbasis mobile application untuk meningkatkan aksesibilitas dan kemudahan pengguna.",
            "link" => ["https://drive.google.com/drive/u/0/folders/1m8yqj-lHWVNhz_clySPOgV8X2Jx_rvFO", "https://www.figma.com/design/P1iM6Nq17L8MCqLVb6Nbwi/Project-1?node-id=163-323&t=5vy88zMYLJb4XIAh-0"]
          ],
          [
            "image" => "assets/porto4.png",
            "title" => "Andre Barbershop",
            "date" => "June 2025",
            "description" => "Perancangan antarmuka WebApp Andre Barbershop, sistem informasi manajemen pemesanan layanan potong rambut secara online.",
            "link" => ["https://drive.google.com/drive/u/0/folders/18ICVEvH5Uue4fqSR7wFj6K22H4JIPEkl", "https://www.figma.com/design/Vkzq7zb8Fq00hvy0IKVITl/RKPL-6--Copy-?m=auto&t=EidLUkCA85KSQcnS-6"]
          ],
          [
            "image" => "assets/porto2.png",
            "title" => "SIMAK",
            "date" => "May 2025",
            "description" => "Perancangan perangkat lunak pendeteksi tingkat kefokusan siswa dalam pembelajaran di kelas berbasis analisis visual menggunakan metode YOLO dan Fuzzy Logic.",
            "link" => "https://drive.google.com/drive/folders/1cYo20FvCuxL8G4I-nCwHO-fUE8beYAOD?usp=sharing"
          ],
          [
            "image" => "assets/porto1.png",
            "title" => "SIM - BUTIK",
            "date" => "April 2025",
            "description" => "Pembuatan dan perancangan WebApp pendukung efisiensi pengelolaan operasional dan peningkatan kualitas layanan butik dalam menangani pesanan secara fleksibel dan terorganisir.",
            "link" => ["https://drive.google.com/drive/folders/1W6GuOxWn1gBVEaliYEoH8flnVvP9UlMO?usp=sharing", "https://github.com/AkunGitHubUPN/project-rbpl-native", "https://www.figma.com/design/H4wvwkx0vKLotsEa8G5Eyd/RBPL?node-id=97-177&p=f&t=EidLUkCA85KSQcnS-0"]
          ],
          [
            "image" => "assets/porto5.png",
            "title" => "Pantau Api",
            "date" => "July 2024",
            "description" => "Pembuatan dan perancangan website penyedia informasi tentang kebakaran hutan dan lahan di Indonesia, pelaporan, juga edukasi pencegahan kebakaran.",
            "link" => ["https://drive.google.com/drive/folders/1_uEvkcrHpDzIS2ZNiF-m7_urjoEwyIps?usp=drive_link", "https://github.com/AkunGitHubUPN/SIMB"]
          ]
        ];

        function getPlatformFromUrl($url) {
          if (strpos($url, 'drive.google.com') !== false) {
            return 'Google Drive';
          } elseif (strpos($url, 'github.com') !== false) {
            return 'GitHub';
          } elseif (strpos($url, 'figma.com') !== false) {
            return 'Figma';
          } else {
            return 'Link';
          }
        }

        foreach ($projects as $index => $project) {
          echo '<div class="card-porto">';
          echo '<img src="' . $project["image"] . '" alt="">';
          echo '<div class="porto-head">';
          echo '<h1>' . $project["title"] . '</h1>';
          echo '<h2>' . $project["date"] . '</h2>';
          echo '</div>';
          echo '<p>' . $project["description"] . '</p>';
          
          $links = $project["link"];
          if (is_array($links)) {
            echo '<button onclick="showPopup(' . $index . ')">View More</button>';

            echo '<div id="popup-' . $index . '" class="popup-overlay" style="display: none;">';
            echo '<div class="popup-content">';
            echo '<span class="close-btn" onclick="closePopup(' . $index . ')">&times;</span>';
            echo '<h3>Choose Platform:</h3>';
            echo '<div class="popup-buttons">';
            
            foreach ($links as $link) {
              $platform = getPlatformFromUrl($link);
              echo '<a href="' . $link . '" target="_blank" class="popup-button">';
              echo $platform;
              echo '</a>';
            }
            
            echo '</div>';
            echo '</div>';
            echo '</div>';
          } else {
            if ($links === '#') {
              echo '<button disabled>Coming Soon</button>';
            } else {
              echo '<button><a href="' . $links . '" target="_blank">View More</a></button>';
            }
          }
          
          echo '</div>';
        }
        ?>
      </div>
    </section>

    <section class="page contact" id="contact">
        <h1>REACH ME OUT!</h1>

        <div class="social-icons">
          <a href="https://github.com/AkunGitHubUPN" aria-label="GitHub">
            <img src="assets/icon1.png" alt="">
          </a>
          <a href="https://www.linkedin.com/in/wurjayatma" aria-label="LinkedIn">
            <img src="assets/icon2.png" alt="">
          </a>
          <a href="https://www.instagram.com/wurjayatma" aria-label="Instagram">
            <img src="assets/icon3.png" alt="">
          </a>
        </div>
    </section>
  </main>

  <script>
    function showPopup(index) {
      document.getElementById('popup-' + index).style.display = 'flex';
    }

    function closePopup(index) {
      document.getElementById('popup-' + index).style.display = 'none';
    }

    document.addEventListener('click', function(event) {
      if (event.target.classList.contains('popup-overlay')) {
        event.target.style.display = 'none';
      }
    });
  </script>

  <script src="script.js"></script>
</body>

</html>