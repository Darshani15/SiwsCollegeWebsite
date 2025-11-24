<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B.Sc. Data Science</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Tab styling */
        .tabs {
            display: flex;
            margin-bottom: 20px;
            background-color: #f1f1f1;
        }

        .tabs button {
            padding: 10px;
            margin-right: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .tabs button:hover {
            background-color: #45a049;
        }

        .tabs button.active {
            background-color: #45a049;
            font-weight: bold;
        }

        /* Tab content styling */
        .tab-content {
            display: none;
            padding: 20px;
            border: 1px solid #ddd;
            border-top: none;
        }

        .tab-content table {
            width: 100%;
            border-collapse: collapse;
        }

        .tab-content th, .tab-content td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        .tab-content th {
            background-color: #4CAF50;
            color: white;
        }

        .tab-content tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .tab-content tr:last-child {
            font-weight: bold;
        }

        .program-profile {
            margin-bottom: 20px;
            font-size: 18px;
        }

        .program-profile p {
            margin: 10px 0;
        }
    </style>
</head>
<body>

    <!-- Program Profile Information -->
    <div class="program-profile">
        <h1>B.Sc. Data Science</h1>
        <p><strong>Duration:</strong> 6 semesters</p>
        <p><strong>Intake:</strong> 60</p>
        <p><strong>Eligibility:</strong> A student must have passed Std. XII (Higher Secondary Certificate Examination) conducted by any statutory board with a minimum of 45% Passing (Open) and 40% (Reserved) in First Attempt with Mathematics as a subject.</p>
    </div>

    <!-- Tabs for each semester -->
    <div class="tabs">
        <button class="tablink active" onclick="openTab(event, 'sem1')">Semester 1</button>
        <button class="tablink" onclick="openTab(event, 'sem2')">Semester 2</button>
        <button class="tablink" onclick="openTab(event, 'sem3')">Semester 3</button>
    </div>

    <!-- Tab Content for Semesters -->
    <div id="sem1" class="tab-content active">
        <h3>Semester 1</h3>
        <!-- Semester 1 Table -->
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
                    <td>Major Theory</td>
                    <td>Python Programming</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Major Practical</td>
                    <td>Data Science Major Practical 1</td>
                    <td>2</td>
                    <td>4</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Minor Theory</td>
                    <td>Computational Statistics</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Minor Practical</td>
                    <td>Data Science Minor Practical 1</td>
                    <td>2</td>
                    <td>4</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Skill Enhancement Course</td>
                    <td>Microprocessor and Microcontroller</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Value Education Course</td>
                    <td>Constitution of India - I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Ability Enhancement Course</td>
                    <td>Communication Skills in English - I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Open Elective 1</td>
                    <td>Personal Banking</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Open Elective 2</td>
                    <td>Introduction to Advertising</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Indian Knowledge System</td>
                    <td>Indian Knowledge System</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Co-Curricular</td>
                    <td>NCC</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Fencing</td>
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
        <!-- Semester 2 Table -->
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
                    <td>Major Theory</td>
                    <td>Introduction to Operating System</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Major Practical</td>
                    <td>Data Science Major Practical 2</td>
                    <td>2</td>
                    <td>4</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Minor Theory</td>
                    <td>Introduction to Database Management System</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Minor Practical</td>
                    <td>Data Science Minor Practical 2</td>
                    <td>2</td>
                    <td>4</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Skill Enhancement Course</td>
                    <td>Introduction to Algorithms</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Vocational Skill Course</td>
                    <td>Web Designing</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Value Education Course</td>
                    <td>Constitution of India - II</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Ability Enhancement Course</td>
                    <td>Communication Skills in English - II</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Open Elective 1</td>
                    <td>Personal Taxation</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Open Elective 2</td>
                    <td>Fundamentals of Advertising</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Co-Curricular</td>
                    <td>NCC</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Fencing</td>
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
        <!-- Semester 3 Table -->
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
                    <td>Major Theory-I</td>
                    <td>Data Warehousing and Data Mining</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Major Theory-II</td>
                    <td>Computer Networks and Security</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Major Practical</td>
                    <td>Data Science Major Practical 3</td>
                    <td>2</td>
                    <td>4</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Minor Theory-I</td>
                    <td>Fundamentals of Graphics</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Minor Theory-II</td>
                    <td>Calculus</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Minor Practical</td>
                    <td>Data Science Minor Practical 3</td>
                    <td>2</td>
                    <td>4</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Skill Enhancement Course</td>
                    <td>Embedded Systems and Internet of Things</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Vocational Skill Course</td>
                    <td>AngularJS and Express</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Ability Enhancement Course</td>
                    <td>Communication Skills in Hindi -I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Open Elective</td>
                    <td>Cyber Law</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Co-Curricular</td>
                    <td>NCC</td>
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
        <p>Content coming soon...</p>
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

</body>
</html>
