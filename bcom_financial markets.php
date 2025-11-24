//bcom_financial markets.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B.Com Financial Markets</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .tabs {
            display: flex;
            margin-top: 20px;
            background-color: #333;
        }

        .tabs button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            flex: 1;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .tabs button:hover {
            background-color: #45a049;
        }

        .tabs button.active {
            background-color: #45a049;
            font-weight: bold;
        }

        .tab-content {
            display: none;
            background-color: white;
            padding: 20px;
            border: 1px solid #ddd;
        }

        .tab-content.active {
            display: block;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:last-child {
            font-weight: bold;
        }

        .total-row {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <h1 style="text-align: center; padding: 20px; background-color: #4CAF50; color: white;">B.Com Financial Markets</h1>
    
    <!-- Tabs for Semester Navigation -->
    <div class="tabs">
        <button class="tablink active" onclick="openTab(event, 'sem1')">Semester 1</button>
        <button class="tablink" onclick="openTab(event, 'sem2')">Semester 2</button>
        <button class="tablink" onclick="openTab(event, 'sem3')">Semester 3</button>
        <button class="tablink" onclick="openTab(event, 'sem4')">Semester 4</button>
    </div>

    <!-- Tab Content for Semesters -->
    <div id="sem1" class="tab-content active">
        <h3>Semester 1</h3>
        <table>
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Courses</th>
                    <th>Title</th>
                    <th>Credits</th>
                    <th>Lectures / per week</th>
                    <th>Syllabus</th>
                    <th>Examination Patterns</th>
                    <th>E-content / Notes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Major</td>
                    <td>Indian Financial System</td>
                    <td>4</td>
                    <td>4</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Minor</td>
                    <td>Micro Economics</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Skill Enhancement Course (SEC)</td>
                    <td>Financial Accounting</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Ability Enhancement Course (AEC)</td>
                    <td>Communication Skills in English -I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Value Education Course (VEC)</td>
                    <td>Constitution of India -I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Open Elective I (OE I)</td>
                    <td>Business Mathematics</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Open Elective II (OE II)</td>
                    <td>Introduction to Computer Science -I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Indian Knowledge System (IKS)</td>
                    <td>Indian Knowledge System</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Cocurricular (Any One)</td>
                    <td>NCC</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td></td>
                    <td>NSS</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td></td>
                    <td>DLLE</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Dramatics</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Fine Art</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Yoga</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Health & Wellness</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr style="background-color: #f9f9f9; font-weight: bold;">
                    <td colspan="3">Total</td>
                    <td>22</td>
                    <td>22</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
            </tbody>
        </table>
    </div>
<div id="sem2" class="tab-content">
    <h3>Semester 2</h3>
    <table>
        <thead>
            <tr>
                <th>Sr. No.</th>
                <th>Courses</th>
                <th>Title</th>
                <th>Credits</th>
                <th>Lectures / per week</th>
                <th>Syllabus</th>
                <th>Examination Patterns</th>
                <th>E-content / Notes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Major</td>
                <td>Financial Markets</td>
                <td>4</td>
                <td>4</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Minor</td>
                <td>Financial Management -I</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Vocational Skill Course (VSC)</td>
                <td>Accounting Software-I</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Skill Enhancement Course (SEC)</td>
                <td>Management Accounting</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Ability Enhancement Course (AEC)</td>
                <td>Communication Skills in English -II</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Value Education Course (VEC)</td>
                <td>Constitution of India - II</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Open Elective I (OE I)</td>
                <td>Business Statistics</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Open Elective II (OE II)</td>
                <td>Introduction to Information Technology</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Cocurricular (Any One)</td>
                <td>NCC</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td></td>
                <td>NSS</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td></td>
                <td>DLLE</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td></td>
                <td>Dramatics</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td></td>
                <td>Fine Art</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td></td>
                <td>Yoga</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td></td>
                <td>Health & Wellness</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr style="background-color: #f9f9f9; font-weight: bold;">
                <td colspan="3">Total</td>
                <td>22</td>
                <td>22</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
        </tbody>
    </table>
</div>
<div id="sem3" class="tab-content">
    <h3>Semester 3</h3>
    <table>
        <thead>
            <tr>
                <th>Sr. No.</th>
                <th>Courses</th>
                <th>Title</th>
                <th>Credits</th>
                <th>Lectures / per week</th>
                <th>Syllabus</th>
                <th>Examination Patterns</th>
                <th>E-content / Notes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Major</td>
                <td>Commodity & Derivative Markets</td>
                <td>4</td>
                <td>4</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td></td>
                <td>Money Market</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Minor</td>
                <td>Human Resource Management</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td></td>
                <td>Business Law</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Vocational Skill Course (VSC)</td>
                <td>Treasury Management</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Skill Enhancement Course (SEC)</td>
                <td>Financial Management</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Ability Enhancement Course (AEC)</td>
                <td>Communication Skills in Hindi -II</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td></td>
                <td>Communication Skills in Marathi -II</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td></td>
                <td>Communication Skills in Tamil -II</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td></td>
                <td>Communication Skills in Sanskrit -II</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Open Elective I (OE I)</td>
                <td>Basic Excel</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Cocurricular (Same as in previous Semester)</td>
                <td>NCC</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td></td>
                <td>NSS</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td></td>
                <td>DLLE</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td></td>
                <td>Dramatics</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td></td>
                <td>Fine Art</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td></td>
                <td>Yoga</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr>
                <td></td>
                <td>Health & Wellness</td>
                <td>2</td>
                <td>2</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
            <tr style="background-color: #f9f9f9; font-weight: bold;">
                <td colspan="3">Total</td>
                <td>22</td>
                <td>22</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
            </tr>
        </tbody>
    </table>
</div>


      <!-- SEMESTER 4 -->
  <div id="sem4" class="tab-content">
    <h2 class="text-2xl font-semibold mb-4">Semester 4</h2>
    <p class="text-gray-600">Content coming soon...</p>
  </div>


    <script>
        // Function to open the selected tab
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;

            // Hide all tab contents
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Remove "active" class from all tabs
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the clicked tab content
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Set default active tab
        document.getElementsByClassName("tablink")[0].click();
    </script>
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
