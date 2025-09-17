<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ICS Dashboard</title>
  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="css/dashboard2.css">
  <link rel="stylesheet" href="css/nightmode.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@400;600&display=swap">
</head>
<body>
  <!-- ===== Header ===== -->
  <header class="ics">
    <a href="https://web.facebook.com/profile.php?id=61572202590222" target="_blank">
      <img src="images/ics.png" alt="ICS BASC Logo"></a>
    <div class="insti">
      <h1>INSTITUTE OF COMPUTER STUDIES</h1>
      <h3>BULACAN AGRICULTURAL STATE COLLEGE</h3>
    </div>

  <div><h1>hi</h1></div>

    <button id="nightModeBtn">Night Mode</button>

    <div class="profile" data-target="profiling">
      <video src="images/profile.mp4" muted loop></video>
    </div>
  </header>

  <!-- ===== Main Container ===== -->
  <main>
    <div class="container">
      <div class="box" data-target="announcement">
        <video src="images/megaphone.mp4" muted loop></video>
        <p>Announcement</p>
      </div>

      <div class="box" data-target="grades">
        <video src="images/cog.mp4" muted loop></video>
        <p>Grades</p>
      </div>

      <div class="box" data-target="registration">
        <video src="images/cor.mp4" muted loop></video>
        <p>Subjects Enrolled</p>
      </div>

      <div class="box" data-target="org">
        <video src="images/org.mp4" muted loop></video>
        <p>Student Organization</p>
      </div>
    </div>
  </main>

  <div class="sched">
    <div class="class-sched">
      <h1>ICS-BSIT CLASS SCHEDULE</h1>
    </div>

    <div class="sched-pic-container">
      <div class="sched-search">
        <input type="search" placeholder="Search schedule...">
      </div>
      <div class="sched-pic">
        <img src="images/sched.png" alt="">
        <img src="images/sched/1a.jpg" alt="BSIT 1A">
        <img src="images/sched/1b.jpg" alt="BSIT 1B">          
        <img src="images/sched/1c.jpg" alt="BSIT 1C">
        <img src="images/sched/1d.jpg" alt="BSIT 1D">
        <img src="images/sched/1e.jpg" alt="BSIT 1E">
        <img src="images/sched/2a.jpg" alt="BSIT 2A">
        <img src="images/sched/2b.jpg" alt="BSIT 2B">
        <img src="images/sched/2c.jpg" alt="BSIT 2C">
        <img src="images/sched/2d.jpg" alt="BSIT 2D">
        <img src="images/sched/2e.jpg" alt="BSIT 2E">
        <img src="images/sched/3a.jpg" alt="BSIT 3A">
        <img src="images/sched/3b.jpg" alt="BSIT 3B">
        <img src="images/sched/3c.jpg" alt="BSIT 3C">
        <img src="images/sched/4a.jpg" alt="BSIT 4A">
        <img src="images/sched/4b.jpg" alt="BSIT 4B">
        <img src="images/sched/4c.jpg" alt="BSIT 4C">
        <img src="images/sched/4d.jpg" alt="BSIT 4D">
        <img src="images/sched/irreg.jpg" alt="BSIT 4 irreg ">
      </div>
    </div>
  </div>

  <!-- Image Overlay -->
<div id="imgOverlay" class="img-overlay">
  <span class="close-overlay">&times;</span>
  <img id="overlayImg" src="" alt="">
</div>

  


  <!-- ===== Faculty Section ===== -->
  <div class="faculty">
    <h1>ICS FACULTY</h1>
    <div class="ics-faculty">
      <!-- Example: repeat for each faculty member -->
      <div class="ics-faculty-names">
        <img src="images/faculty/dean.png" alt="Dean">
        <h4>Michelle M. Cortez</h4>
        <p>Dean</p>
      </div>
      <div class="ics-faculty-names">
        <img src="images/faculty/assoc.png" alt="Associate Dean">
        <h4>Dr. Myrtle S. Bernardo</h4>
        <p>Associate Dean</p>
      </div> 
      <div class="ics-faculty-names"> 
        <img src="images/faculty/melai.png" alt=""> 
        <h4>Dr. Ma. Melanie A. Cruz</h4> 
        <p>Director, MIS</p> 
      </div> 
      <div class="ics-faculty-names"> 
        <img src="images/faculty/arnel.png" alt=""> 
        <h4>Arnel S. Adriano</h4> 
        <p>Associate Professor 1</p> 
      </div> 
      <div class="ics-faculty-names"> 
        <img src="images/faculty/ame.png" alt=""> 
        <h4>Russel Amira H. Balacania</h4> 
        <p>Instructor I</p> 
      </div> 
        <div class="ics-faculty-names"> 
          <img src="images/faculty/jerome.png" alt=""> 
        <h4>Jerome M. Dimafelix</h4> 
        <p>Instructor I</p> 
      </div> 
        <div class="ics-faculty-names"> 
          <img src="images/faculty/jermyn.png" alt=""> 
        <h4>Jermyn G. Evangilista</h4> 
        <p>Instructor I</p> 
      </div> 
        <div class="ics-faculty-names"> 
          <img src="images/faculty/francezca.png" alt=""> 
        <h4>Andrei Francezca R. Gonzales</h4> 
        <p>Instructor I</p> 
      </div> 
      <div class="ics-faculty-names"> 
        <img src="images/faculty/ghelo.png" alt=""> 
        <h4>Mark Angelo G. Inducil</h4> 
        <p>Instructor I</p> 
      </div> 
      <div class="ics-faculty-names"> 
        <img src="images/faculty/aljon.png" alt=""> 
        <h4>Aljon A. Macsino</h4> 
        <p>Instructor I</p> 
      </div> 
      <div class="ics-faculty-names"> 
        <img src="images/faculty/arjay.png" alt=""> 
        <h4>Arjay C. Marukot</h4> 
        <p>Instructor I</p> 
      </div> 
      <div class="ics-faculty-names"> 
        <img src="images/faculty/memay.png" alt=""> 
        <h4>Maylene A. Samin</h4> 
        <p>Instructor I</p> 
      </div> 
      <div class="ics-faculty-names"> 
        <img src="images/faculty/chito.png" alt=""> 
        <h4>Raon Chito E. Sarmiento</h4> 
        <p>Instructor I</p> 
      </div>
    </div>
  </div>

  <!-- ===== Programs Offered ===== -->
  <div class="program">
    <h1>ICS Programs Offered</h1>
    <div class="offered">
      <div class="offered-bsit" data-target="bsit">
        <h3>Bachelor of Science in Information Technology</h3>
      </div>
      <div class="offered-mit" data-target="mit">
        <h3>Master in Information Technology</h3>
      </div>
    </div>
  </div>

  <!-- ===== Main Overlay for Content Sections ===== -->
  <div class="overlay" id="overlay">
    <div class="modal" id="modal-content">
      <span class="close-btn">&times;</span>

      <!-- Announcement -->
      <div id="announcement" class="content-section">
        <h2>Announcement</h2>
        <div class="announcement-grid">
          <div class="card">
            <img src="images/capstone.png" alt="">
            <h3>Application for Capstone Project Final Defense</h3>
            <p>Attention BSIT 4th Year Students! Filing of Application for Capstone Project Final Presentation...</p>
            <a href="https://web.facebook.com/share/p/16xRdrts2C/" target="_blank">Read more...</a>
          </div>
          <div class="card">
            <img src="images/exam.png" alt="">
            <h3>Call for Participants: ICT Proficiency Exam I</h3>
            <p>The Institute of Computer Studies (ICS), in partnership with the Department of Information...</p>
            <a href="https://web.facebook.com/share/p/1FKV5Gr7Pc/" target="_blank">Read more...</a>
          </div>
          <div class="card"> 
            <img src="images/sched.png" alt=""> 
            <h3>BSIT Students' Class Schedule</h3> 
            <p>Official Class Schedule for BSIT Students – 1st Semester, A.Y. 2025–2026...</p> 
            <a href="https://web.facebook.com/share/p/1Badam5RDW/" target="_blank">Read more...</a> 
          </div> 
        </div> 
        <div class="view-more"> 
          <a href="#">View all announcements →</a> 
        </div>
        
      </div>

      <!-- Grades -->
      <div id="grades" class="content-section">
        <h2>No Grades Available</h2>
      </div>

      <!-- Registration -->
      <div id="registration" class="content-section">
        <h2>Subjects Enrolled</h2>
        <div class="subject">
          <table>
            <tr>
              <th rowspan="2">Subject Code</th>
              <th rowspan="2">Description Title</th>
              <th colspan="2">No. of Units</th>
              <th rowspan="2">Total Units</th>
              <th rowspan="2">Day/s</th>
              <th rowspan="2">Time</th>
              <th rowspan="2">Room</th>
              <th rowspan="2">Faculty</th>
            </tr>

            <tr>              
              <th>Lec</th>
              <th>Lab</th>             
            </tr>

            <tbody>
              <tr>
                <td rowspan="2">IT 311</td>
                <td rowspan="2">Computer Networking 2</td>
                <td rowspan="2">2.0</td>
                <td rowspan="2">1.0</td>
                <td rowspan="2">3.0</td>
                <td>M</td>
                <td>7:00 - 10:00</td>
                <td>ITNB 101</td>
                <td rowspan="2">Dimafeliz, JM</td>
              </tr>
            
              <tr>
                <td>TH</td>
                <td>7:00 - 9:00</td>
                <td>ITB102</td>
              </tr>
            </tbody>

            <tbody>
              <tr>
                <td rowspan="2">IT 312</td>
                <td rowspan="2">Systems Integration and Architecture 1</td>
                <td rowspan="2">2.0</td>
                <td rowspan="2">1.0</td>
                <td rowspan="2">3.0</td>
                <td>M</td>
                <td>2:00 - 6:00</td>
                <td>ITNB 102</td>
                <td rowspan="2">Evangelista, JG</td>
              </tr>

              <tr>
                <td>W</td>
                <td>5:00 - 6:00</td>
                <td>ITB 104</td>
              </tr>
            </tbody>

            <tbody>
              <tr>
                <td rowspan="2">IT 313</td>
                <td rowspan="2">Information Management 1</td>
                <td rowspan="2">2.0</td>
                <td rowspan="2">1.0</td>
                <td rowspan="2">3.0</td>
                <td>M</td>
                <td>11:00 - 12:00</td>
                <td>ITNB 102</td>
                <td rowspan="2">Evangelista, JG</td>
              </tr>

              <tr>
                <td>T</td>
                <td>1:00 - 5:00</td>
                <td>ITNB 203</td>
              </tr>
            </tbody>

            <tbody>
              <tr>
                <td rowspan="2">IT 314</td>
                <td rowspan="2">Multimedia Publishing</td>
                <td rowspan="2">2.0</td>
                <td rowspan="2">1.0</td>
                <td rowspan="2">3.0</td>
                <td>M</td>
                <td>8:00 - 9:00</td>
                <td>ITB 102</td>
                <td rowspan="2">Balacania, RA</td>
              </tr>

              <tr>
                <td>TH</td>
                <td>1:00 - 5:00</td>
                <td>ITNB 203</td>
              </tr>
            </tbody>

            <tbody>
              <tr>
                <td rowspan="2">IT 315</td>
                <td rowspan="2">Quantitative Methods</td>
                <td rowspan="2">3.0</td>
                <td rowspan="2"></td>
                <td rowspan="2">3.0</td>
                <td>T</td>
                <td>7:00 - 8:30</td>
                <td>ITNB 101</td>
                <td rowspan="2">Adriano, As</td>
              </tr>

              <tr>
                <td>F</td>
                <td>7:00 - 8:30</td>
                <td>ITB 106</td>
              </tr>
            </tbody>

            <tbody>
              <tr>
                <td rowspan="2">IT E03</td>
                <td rowspan="2">Elective 3</td>
                <td rowspan="2">2.0</td>
                <td rowspan="2">1.0</td>
                <td rowspan="2">3.0</td>
                <td>W</td>
                <td>10:00 - 12:00</td>
                <td>ITB 202</td>
                <td rowspan="2">Inducil, MA</td>
              </tr>

              <tr>
                <td>F</td>
                <td>1:00 - 4:00</td>
                <td>ITNB 203</td>
              </tr>
            </tbody>

            <tbody>
              <tr>
                <td rowspan="2">IT E04</td>
                <td rowspan="2">Elective 4</td>
                <td rowspan="2">2.0</td>
                <td rowspan="2">1.0</td>
                <td rowspan="2">3.0</td>
                <td>W</td>
                <td>1:00 - 4:00</td>
                <td>ITNB 201</td>
                <td rowspan="2">Sarmiento, RC</td>
              </tr>

              <tr>
                <td>TH</td>
                <td>10:00 - 12:00</td>
                <td>ITNB 101</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Organizations -->
      <div id="org" class="content-section">
        <h2>Organizations</h2>
        <div class="org-grid">
          <div class="org-item">
            <a href="https://web.facebook.com/icssc2025" target="_blank">
              ICSSC
              <img src="images/icssc.png" alt="">
            </a>
            <p>Institue of Computer Studies Student Council</p>
          </div>
          <div class="org-item">
            <a href="https://www.facebook.com/bitsbasc" target="_blank">
              BITS
              <img src="images/bits.png" alt="">
            </a>
            <p>Builders of Information Technology Society</p>
          </div>
        </div>
      </div>

      <!-- Program Details -->
      <div id="bsit" class="program-section">
        <h3>Why choose Bachelor of Science in Information Technology (BSIT)?</h3>
        <p>A Bachelor of Science in Information Technology (BSIT) prepares students with essential skills in programming, networking, databases, and 
        emerging technologies. Graduates can pursue careers in software development, cybersecurity, web and mobile apps, and data analytics. 
        The program also promotes critical thinking, creativity, and continuous learning, enabling students to thrive in a fast-changing tech 
        industry and contribute positively to society.</p>
      </div>

      <div id="mit" class="program-section">
        <h3>Why choose Master in Information Technology (MIT)?</h3>
        <p>Pursuing a Master of Information Technology (MIT) allows professionals to gain advanced skills in software, cybersecurity, data analytics, 
        and IT management. It opens opportunities for leadership and specialized roles while enhancing critical thinking and problem-solving abilities. 
        An MIT degree empowers graduates to advance their careers and make a meaningful impact in the tech industry.</p>
      </div>
    </div>
  </div>

  <!-- ===== Profile Overlay ===== -->
  <div id="profiling" class="profile-overlay">
    <div class="modalll">
      <span class="close-btn">&times;</span>
      <h3>Profile</h3>

      <div class="profile-content">
        <div class="profile-pic">
          <input type="file" id="profile-pic" accept="image/*" hidden>
          <img id="profile-preview" src="images/profile.png" alt="Profile Picture">
          <label for="profile-pic">Edit Profile</label>
          <button id="profile-remove">Remove Photo</button>
        </div>

        <div class="profile-info">
          <p><strong>Name: </strong> <span id="profileName"></span></p>
          <p><strong>Student Number: </strong> <span id="profileSNumber"></span></p>
          <p><strong>Year & Section:</strong> <span id="profileSection"></span></p>
        </div>
      </div>  
    </div>
  </div>

  <footer>
    <div class="left-footer">
      <div class="basc-ics">
        <a href="https://web.facebook.com/basc1952" target="_blank">
          <img src="images/basc.png" alt=""> </a>
        <a href="https://web.facebook.com/profile.php?id=61572202590222" target="_blank">
          <img src="images/ics.png" alt=""> </a>
      </div>

      <h1>Bulacan Agricultural State College</h1>
      <h1>Institue of Computer Studies</h1>
    
      <div class="contact">
        <p>Bulacan Agricultural State College Compound,</p>
        <p>Pinaod, San Ildefonso,</p>
        <p>Bulacan, 3010 Philippines</p>

        <h4>CONTACT US</h4>
        <p><img src="images/phone.png" alt=""> <strong>Phone:</strong> (044) 816 8179</p>
        <p><img src="images/email.png" alt=""> <strong>Email:</strong> icsbasc@gmail.com</p>
        <p><img src="images/fb.png" alt=""> <strong>Facebook:</strong> https://web.facebook.com/profile.php?id=61572202590222</p>
      </div>
    </div>

    <div class="right-footer">
      <h1>BASC-ICS Location📍</h1>
      <img src="images/map.jpg" alt="BASC-ICS Map">
    </div>
  </footer>

  <!-- ===== Inline Student Data from PHP Session ===== -->
  <script>
    const studentData = {
      name: "<?php echo $_SESSION['fname']; ?>",
      snumber: "<?php echo $_SESSION['snumber']; ?>",
      section: "<?php echo $_SESSION['section']; ?>"
    };
  </script>

  <!-- ===== JS ===== -->
  <script src="js.js"></script>

</body>
</html>

