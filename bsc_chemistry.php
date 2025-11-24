<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>B.Sc Chemistry - Academics</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .tab-content { display: none; }
    .active { display: block; }
  </style>
  <script>
    function openSem(evt, semId) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tab-content");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("bg-blue-600", "text-white");
        tablinks[i].classList.add("bg-gray-200");
      }
      document.getElementById(semId).style.display = "block";
      evt.currentTarget.classList.add("bg-blue-600", "text-white");
    }
    window.onload = function() {
      document.getElementsByClassName("tablink")[0].click();
    }
  </script>
</head>
<body class="bg-gray-100 p-6">

  <h1 class="text-3xl font-bold text-center mb-6">B.Sc Chemistry - Academics</h1>

  <!-- Semester Tabs -->
  <div class="flex justify-center space-x-2 mb-6">
    <button class="tablink px-4 py-2 rounded-lg bg-gray-200" onclick="openSem(event, 'sem1')">Semester 1</button>
    <button class="tablink px-4 py-2 rounded-lg bg-gray-200" onclick="openSem(event, 'sem2')">Semester 2</button>
    <button class="tablink px-4 py-2 rounded-lg bg-gray-200" onclick="openSem(event, 'sem3')">Semester 3</button>
    <button class="tablink px-4 py-2 rounded-lg bg-gray-200" onclick="openSem(event, 'sem4')">Semester 4</button>
    <button class="tablink px-4 py-2 rounded-lg bg-gray-200" onclick="openSem(event, 'sem5')">Semester 5</button>
    <button class="tablink px-4 py-2 rounded-lg bg-gray-200" onclick="openSem(event, 'sem6')">Semester 6</button>
  </div>

  <!-- SEMESTER 1 -->
<!-- SEMESTER 1 -->
<div id="sem1" class="tab-content">
  <h2 class="text-2xl font-semibold mb-4">Semester 1</h2>
  <div class="overflow-x-auto">
    <table class="table-auto border border-gray-400 w-full text-sm">
      <thead class="bg-blue-500 text-white">
        <tr>
          <th class="border px-2 py-1">Sr. No.</th>
          <th class="border px-2 py-1">Courses</th>
          <th class="border px-2 py-1">Title</th>
          <th class="border px-2 py-1">Credits</th>
          <th class="border px-2 py-1">Lectures/week</th>
          <th class="border px-2 py-1">Syllabus</th>
          <th class="border px-2 py-1">Examination Pattern</th>
          <th class="border px-2 py-1">E-content/Notes</th>
        </tr>
      </thead>
      <tbody>
        <!-- Major Chemistry -->
        <tr>
          <td class="border px-2 py-1">1</td>
          <td class="border px-2 py-1">Major - CHEMISTRY</td>
          <td class="border px-2 py-1">Physical, Organic & Inorganic Chemistry - I</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">Major - CHEMISTRY</td>
          <td class="border px-2 py-1">Chemistry Major Practical - I</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- Minor Courses -->
        <tr>
          <td class="border px-2 py-1">3</td>
          <td class="border px-2 py-1">Minor - PHYSICS</td>
          <td class="border px-2 py-1">Basics of Optics</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">4</td>
          <td class="border px-2 py-1">Minor - PHYSICS</td>
          <td class="border px-2 py-1">Physics Minor Practical - I</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <tr>
          <td class="border px-2 py-1">5</td>
          <td class="border px-2 py-1">Minor - MATHEMATICS</td>
          <td class="border px-2 py-1">Differential Equations And Matrix Algebra</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">6</td>
          <td class="border px-2 py-1">Minor - MATHEMATICS</td>
          <td class="border px-2 py-1">Mathematics Minor Practical - I</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <tr>
          <td class="border px-2 py-1">7</td>
          <td class="border px-2 py-1">Minor - MICROBIOLOGY</td>
          <td class="border px-2 py-1">Basics of Microbiology</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">8</td>
          <td class="border px-2 py-1">Minor - MICROBIOLOGY</td>
          <td class="border px-2 py-1">Microbiology Minor Practical - I</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- Skill Enhancement -->
        <tr>
          <td class="border px-2 py-1">9</td>
          <td class="border px-2 py-1">Skill Enhancement Course</td>
          <td class="border px-2 py-1">Water Quality Assessment</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- Ability Enhancement -->
        <tr>
          <td class="border px-2 py-1">10</td>
          <td class="border px-2 py-1">Ability Enhancement Course</td>
          <td class="border px-2 py-1">Communication Skills in English - I</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- Value Education -->
        <tr>
          <td class="border px-2 py-1">11</td>
          <td class="border px-2 py-1">Value Education Course</td>
          <td class="border px-2 py-1">Indian Constitution and Structure - I</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- Co-Curricular -->
        <tr>
          <td class="border px-2 py-1">12</td>
          <td class="border px-2 py-1">Co-curricular</td>
          <td class="border px-2 py-1">NCC / NSS / DLLE / Dramatics / Yoga / Fine Arts / Health & Wellness</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- Total -->
        <tr class="bg-yellow-100 font-bold">
          <td class="border px-2 py-1 text-center" colspan="3">Total</td>
          <td class="border px-2 py-1">22</td>
          <td class="border px-2 py-1">22</td>
          <td class="border px-2 py-1" colspan="3"></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<!-- SEMESTER 2 -->
<div id="sem2" class="tab-content">
  <h2 class="text-2xl font-semibold mb-4">Semester 2</h2>
  <div class="overflow-x-auto">
    <table class="table-auto border border-gray-400 w-full text-sm">
      <thead class="bg-blue-500 text-white">
        <tr>
          <th class="border px-2 py-1">Sr. No.</th>
          <th class="border px-2 py-1">Courses</th>
          <th class="border px-2 py-1">Title</th>
          <th class="border px-2 py-1">Credits</th>
          <th class="border px-2 py-1">Lectures/week</th>
          <th class="border px-2 py-1">Syllabus</th>
          <th class="border px-2 py-1">Examination Pattern</th>
          <th class="border px-2 py-1">E-content/Notes</th>
        </tr>
      </thead>
      <tbody>
        <!-- Major Chemistry -->
        <tr>
          <td class="border px-2 py-1">1</td>
          <td class="border px-2 py-1">Major - CHEMISTRY</td>
          <td class="border px-2 py-1">Physical, Organic & Inorganic Chemistry - II</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">Major - CHEMISTRY</td>
          <td class="border px-2 py-1">Chemistry Major Practical - II</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- Minor Courses -->
        <tr>
          <td class="border px-2 py-1">3</td>
          <td class="border px-2 py-1">Minor - PHYSICS</td>
          <td class="border px-2 py-1">Digital Electronics</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">4</td>
          <td class="border px-2 py-1">Minor - PHYSICS</td>
          <td class="border px-2 py-1">Physics Minor Practical - II</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <tr>
          <td class="border px-2 py-1">5</td>
          <td class="border px-2 py-1">Minor - MATHEMATICS</td>
          <td class="border px-2 py-1">Differential Equations And Matrix Algebra</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">6</td>
          <td class="border px-2 py-1">Minor - MATHEMATICS</td>
          <td class="border px-2 py-1">Mathematics Minor Practical - II</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <tr>
          <td class="border px-2 py-1">7</td>
          <td class="border px-2 py-1">Minor - MICROBIOLOGY</td>
          <td class="border px-2 py-1">Basic Techniques in Microbiology</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">8</td>
          <td class="border px-2 py-1">Minor - MICROBIOLOGY</td>
          <td class="border px-2 py-1">Microbiology Minor Practical - II</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- Skill Enhancement -->
        <tr>
          <td class="border px-2 py-1">9</td>
          <td class="border px-2 py-1">Skill Enhancement Course</td>
          <td class="border px-2 py-1">Water Quality Assessment - II</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- Ability Enhancement -->
        <tr>
          <td class="border px-2 py-1">10</td>
          <td class="border px-2 py-1">Ability Enhancement Course</td>
          <td class="border px-2 py-1">Communication Skills in English - II</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- Value Education -->
        <tr>
          <td class="border px-2 py-1">11</td>
          <td class="border px-2 py-1">Value Education Course</td>
          <td class="border px-2 py-1">Indian Constitution and Structure - II</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- Co-Curricular -->
        <tr>
          <td class="border px-2 py-1">12</td>
          <td class="border px-2 py-1">Co-curricular</td>
          <td class="border px-2 py-1">NCC / NSS / DLLE / Dramatics / Yoga / Fine Arts / Health & Wellness</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- Total -->
        <tr class="bg-yellow-100 font-bold">
          <td class="border px-2 py-1 text-center" colspan="3">Total</td>
          <td class="border px-2 py-1">22</td>
          <td class="border px-2 py-1">22</td>
          <td class="border px-2 py-1" colspan="3"></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

  <!-- SEMESTER 3 -->
<!-- SEMESTER 3 -->
<div id="sem3" class="tab-content">
  <h2 class="text-2xl font-semibold mb-4">Semester 3</h2>
  <div class="overflow-x-auto">
    <table class="table-auto border border-gray-400 w-full text-sm">
      <thead class="bg-blue-500 text-white">
        <tr>
          <th class="border px-2 py-1">Sr. No.</th>
          <th class="border px-2 py-1">Courses</th>
          <th class="border px-2 py-1">Title</th>
          <th class="border px-2 py-1">Credits</th>
          <th class="border px-2 py-1">Lectures/week</th>
          <th class="border px-2 py-1">Syllabus</th>
          <th class="border px-2 py-1">Examination Pattern</th>
          <th class="border px-2 py-1">E-content/Notes</th>
        </tr>
      </thead>
      <tbody>
        <!-- Major Chemistry -->
        <tr>
          <td class="border px-2 py-1">1</td>
          <td class="border px-2 py-1">Major - CHEMISTRY</td>
          <td class="border px-2 py-1">Physical and Inorganic Chemistry - I</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">Major - CHEMISTRY</td>
          <td class="border px-2 py-1">Organic Chemistry & Analytical Chemistry - I</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">3</td>
          <td class="border px-2 py-1">Major - CHEMISTRY</td>
          <td class="border px-2 py-1">Chemistry Major Practical Course - III</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- Minor Courses -->
        <tr>
          <td class="border px-2 py-1">4</td>
          <td class="border px-2 py-1">Minor - PHYSICS</td>
          <td class="border px-2 py-1">Transducers</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">5</td>
          <td class="border px-2 py-1">Minor - PHYSICS</td>
          <td class="border px-2 py-1">Laser and Fibre Optics</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">6</td>
          <td class="border px-2 py-1">Minor - PHYSICS</td>
          <td class="border px-2 py-1">Physics Minor Practical - III</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <tr>
          <td class="border px-2 py-1">7</td>
          <td class="border px-2 py-1">Minor - MATHEMATICS</td>
          <td class="border px-2 py-1">Mathematical Analysis</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">8</td>
          <td class="border px-2 py-1">Minor - MATHEMATICS</td>
          <td class="border px-2 py-1">Basic Linear Algebra</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">9</td>
          <td class="border px-2 py-1">Minor - MATHEMATICS</td>
          <td class="border px-2 py-1">Mathematics Minor Practical - III</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <tr>
          <td class="border px-2 py-1">10</td>
          <td class="border px-2 py-1">Minor - MICROBIOLOGY</td>
          <td class="border px-2 py-1">Food Microbiology</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">11</td>
          <td class="border px-2 py-1">Minor - MICROBIOLOGY</td>
          <td class="border px-2 py-1">Dairy Microbiology</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">12</td>
          <td class="border px-2 py-1">Minor - MICROBIOLOGY</td>
          <td class="border px-2 py-1">Microbiology Minor Practical Course - III</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- VSC Chemistry -->
        <tr>
          <td class="border px-2 py-1">13</td>
          <td class="border px-2 py-1">VSC - CHEMISTRY</td>
          <td class="border px-2 py-1">Food Adulteration - I</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- SEC Chemistry -->
        <tr>
          <td class="border px-2 py-1">14</td>
          <td class="border px-2 py-1">SEC - CHEMISTRY</td>
          <td class="border px-2 py-1">Synthesis of Inorganic Compounds</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- AEC Courses -->
        <tr>
          <td class="border px-2 py-1">15</td>
          <td class="border px-2 py-1">AEC - HINDI</td>
          <td class="border px-2 py-1">Communication Skills in Hindi - I</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">16</td>
          <td class="border px-2 py-1">AEC - MARATHI</td>
          <td class="border px-2 py-1">Communication Skills in Marathi - I</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">17</td>
          <td class="border px-2 py-1">AEC - TAMIL</td>
          <td class="border px-2 py-1">Communication Skills in Tamil - I</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- Optional Courses -->
        <tr>
          <td class="border px-2 py-1">18</td>
          <td class="border px-2 py-1">OE - COMMERCE</td>
          <td class="border px-2 py-1">Introduction to Salesmanship</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">19</td>
          <td class="border px-2 py-1">OE - LAW</td>
          <td class="border px-2 py-1">Cyber Laws & Corporate Laws</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- CC (Same as previous semester) -->
        <tr>
          <td class="border px-2 py-1">20</td>
          <td class="border px-2 py-1">CC (Same as previous sem)</td>
          <td class="border px-2 py-1">NCC</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <tr class="bg-yellow-100 font-bold">
          <td class="border px-2 py-1 text-center" colspan="3">Total</td>
          <td class="border px-2 py-1">22</td>
          <td class="border px-2 py-1">22</td>
          <td class="border px-2 py-1" colspan="3"></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


  <!-- SEMESTER 4 -->
<!-- SEMESTER 4 -->
<div id="sem4" class="tab-content">
  <h2 class="text-2xl font-semibold mb-4">Semester 4</h2>
  <div class="overflow-x-auto">
    <table class="table-auto border border-gray-400 w-full text-sm">
      <thead class="bg-blue-500 text-white">
        <tr>
          <th class="border px-2 py-1">Sr. No.</th>
          <th class="border px-2 py-1">Courses</th>
          <th class="border px-2 py-1">Title</th>
          <th class="border px-2 py-1">Credits</th>
          <th class="border px-2 py-1">Lectures/week</th>
          <th class="border px-2 py-1">Syllabus</th>
          <th class="border px-2 py-1">Examination Pattern</th>
          <th class="border px-2 py-1">E-content/Notes</th>
        </tr>
      </thead>
      <tbody>
        <!-- Major Chemistry -->
        <tr>
          <td class="border px-2 py-1">1</td>
          <td class="border px-2 py-1">Major - CHEMISTRY</td>
          <td class="border px-2 py-1">Physical Chemistry and Inorganic Chemistry II</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">Major - CHEMISTRY</td>
          <td class="border px-2 py-1">Organic Chemistry & Analytical Chemistry - II</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">3</td>
          <td class="border px-2 py-1">Major - CHEMISTRY</td>
          <td class="border px-2 py-1">Chemistry Major Practical - IV</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">4</td>
          <td class="border px-2 py-1">Major - CHEMISTRY</td>
          <td class="border px-2 py-1">Chemistry Major Practical Course - V</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- Minor Courses -->
        <tr>
          <td class="border px-2 py-1">5</td>
          <td class="border px-2 py-1">Minor - PHYSICS</td>
          <td class="border px-2 py-1">Mechanics and Electronics</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">6</td>
          <td class="border px-2 py-1">Minor - PHYSICS</td>
          <td class="border px-2 py-1">Physics Minor Practical Course - IV</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <tr>
          <td class="border px-2 py-1">7</td>
          <td class="border px-2 py-1">Minor - MATHEMATICS</td>
          <td class="border px-2 py-1">Series and Riemann Integration</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">8</td>
          <td class="border px-2 py-1">Minor - MATHEMATICS</td>
          <td class="border px-2 py-1">Mathematics Minor Practical Course - IV</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <tr>
          <td class="border px-2 py-1">9</td>
          <td class="border px-2 py-1">Minor - MICROBIOLOGY</td>
          <td class="border px-2 py-1">Microbial Interaction and Human Health</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">10</td>
          <td class="border px-2 py-1">Minor - MICROBIOLOGY</td>
          <td class="border px-2 py-1">Microbiology Minor Practical Course - IV</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- VSC Chemistry -->
        <tr>
          <td class="border px-2 py-1">11</td>
          <td class="border px-2 py-1">VSC - CHEMISTRY</td>
          <td class="border px-2 py-1">Food Adulteration - II</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- SEC Physics -->
        <tr>
          <td class="border px-2 py-1">12</td>
          <td class="border px-2 py-1">SEC - PHYSICS</td>
          <td class="border px-2 py-1">Community Engagement Service Project</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- AEC Courses -->
        <tr>
          <td class="border px-2 py-1">13</td>
          <td class="border px-2 py-1">AEC - HINDI</td>
          <td class="border px-2 py-1">Communication Skills in Hindi - II</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">14</td>
          <td class="border px-2 py-1">AEC - MARATHI</td>
          <td class="border px-2 py-1">Communication Skills in Marathi - II</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">15</td>
          <td class="border px-2 py-1">AEC - TAMIL</td>
          <td class="border px-2 py-1">Communication Skills in Tamil - II</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- Optional Courses -->
        <tr>
          <td class="border px-2 py-1">16</td>
          <td class="border px-2 py-1">OE - COMMERCE</td>
          <td class="border px-2 py-1">Introduction to Services Marketing</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">17</td>
          <td class="border px-2 py-1">OE - LAW</td>
          <td class="border px-2 py-1">Intellectual Property Laws</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- CC (Same as previous semester) -->
        <tr>
          <td class="border px-2 py-1">18</td>
          <td class="border px-2 py-1">CC (Same as previous sem)</td>
          <td class="border px-2 py-1">NCC</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <tr class="bg-yellow-100 font-bold">
          <td class="border px-2 py-1 text-center" colspan="3">Total</td>
          <td class="border px-2 py-1">22</td>
          <td class="border px-2 py-1">22</td>
          <td class="border px-2 py-1" colspan="3"></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

  <!-- SEMESTER 5 -->
<!-- SEMESTER 5 -->
<div id="sem5" class="tab-content">
  <h2 class="text-2xl font-semibold mb-4">Semester 5</h2>
  <div class="overflow-x-auto">
    <table class="table-auto border border-gray-400 w-full text-sm">
      <thead class="bg-blue-500 text-white">
        <tr>
          <th class="border px-2 py-1">Sr. No.</th>
          <th class="border px-2 py-1">Courses</th>
          <th class="border px-2 py-1">Title</th>
          <th class="border px-2 py-1">Credits</th>
          <th class="border px-2 py-1">Lectures/week</th>
          <th class="border px-2 py-1">Syllabus</th>
          <th class="border px-2 py-1">Examination Pattern</th>
          <th class="border px-2 py-1">E-content/Notes</th>
        </tr>
      </thead>
      <tbody>
        <!-- Major Chemistry -->
        <tr>
          <td class="border px-2 py-1">1</td>
          <td class="border px-2 py-1">Major - CHEMISTRY</td>
          <td class="border px-2 py-1">Physical Chemistry - I</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">Major - CHEMISTRY</td>
          <td class="border px-2 py-1">Inorganic Chemistry - I</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">3</td>
          <td class="border px-2 py-1">Major - CHEMISTRY</td>
          <td class="border px-2 py-1">Organic Chemistry - I</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">4</td>
          <td class="border px-2 py-1">Major - CHEMISTRY</td>
          <td class="border px-2 py-1">Analytical Chemistry - I</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">5</td>
          <td class="border px-2 py-1">Major - CHEMISTRY</td>
          <td class="border px-2 py-1">Chemical Theory and Metallurgy in Ancient Era</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">6</td>
          <td class="border px-2 py-1">Major - CHEMISTRY</td>
          <td class="border px-2 py-1">Chemistry Major Practical - VI</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">7</td>
          <td class="border px-2 py-1">Major - CHEMISTRY</td>
          <td class="border px-2 py-1">Chemistry Major Practical - VII</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- Major Elective Courses -->
        <tr>
          <td class="border px-2 py-1">8</td>
          <td class="border px-2 py-1">Major Elective - CHEMISTRY</td>
          <td class="border px-2 py-1">Drugs and Dyes - I</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">9</td>
          <td class="border px-2 py-1">Major Elective - CHEMISTRY</td>
          <td class="border px-2 py-1">Practical of Drugs and Dyes - I</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">10</td>
          <td class="border px-2 py-1">Major Elective - CHEMISTRY</td>
          <td class="border px-2 py-1">Liquid Waste Management</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>
        <tr>
          <td class="border px-2 py-1">11</td>
          <td class="border px-2 py-1">Major Elective - CHEMISTRY</td>
          <td class="border px-2 py-1">Practical of Liquid Waste Management</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- VSC Chemistry -->
        <tr>
          <td class="border px-2 py-1">12</td>
          <td class="border px-2 py-1">VSC - CHEMISTRY</td>
          <td class="border px-2 py-1">Microscale Synthesis - I</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- Field Project -->
        <tr>
          <td class="border px-2 py-1">13</td>
          <td class="border px-2 py-1">FP - CHEMISTRY</td>
          <td class="border px-2 py-1">Field Project</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1">2</td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
          <td class="border px-2 py-1"></td>
        </tr>

        <!-- Total Row -->
        <tr class="bg-yellow-100 font-bold">
          <td class="border px-2 py-1 text-center" colspan="3">Total</td>
          <td class="border px-2 py-1">22</td>
          <td class="border px-2 py-1">22</td>
          <td class="border px-2 py-1" colspan="3"></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


  <!-- SEMESTER 6 -->
  <div id="sem6" class="tab-content">
    <h2 class="text-2xl font-semibold mb-4">Semester 6</h2>
    <p class="text-gray-600">Content coming soon...</p>
  </div>
      <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>SIWS N.R. Swamy College of Commerce & Economics and Smt. Thirumalai College of Science (Autonomous)</p>
            <p>Wadala, Mumbai 400031 | Phone: +91-22-24143335 | Email: info@siwscollege.edu.in</p>
            <p>© 2023 SIWS College. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>