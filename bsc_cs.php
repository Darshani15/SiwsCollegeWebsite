<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B.Sc. Computer Science</title>
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
        <h1>B.Sc. Computer Science</h1>
        <p><strong>Duration:</strong> 6 semesters</p>
        <p><strong>Intake:</strong> 60</p>
        <p><strong>Eligibility:</strong> A student must have passed Std. XII (Higher Secondary Certificate Examination) conducted by any statutory board with a minimum of 45% Passing (Open) and 40% (Reserved) in First Attempt with Mathematics as a subject.</p>
    </div>

    <!-- Tabs for each semester -->
    <div class="tabs">
        <button class="tablink active" onclick="openTab(event, 'sem1')">Semester 1</button>
        <button class="tablink" onclick="openTab(event, 'sem2')">Semester 2</button>
        <button class="tablink" onclick="openTab(event, 'sem3')">Semester 3</button>
        <button class="tablink" onclick="openTab(event, 'sem4')">Semester 4</button>
        <button class="tablink" onclick="openTab(event, 'sem5')">Semester 5</button>
        <button class="tablink" onclick="openTab(event, 'sem6')">Semester 6</button>
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
                    <td>Major</td>
                    <td>Web Technologies</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Major</td>
                    <td>Computer Science Major Practical -I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Minor</td>
                    <td>Discrete Mathematics for Computer Science</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Minor</td>
                    <td>Computer Science Minor Practical -I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>SEC</td>
                    <td>Python Programming -I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>AEC</td>
                    <td>Communication Skills in English -I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>VEC</td>
                    <td>Constitution of India -I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>OEI</td>
                    <td>Personal Banking</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>OE2</td>
                    <td>Introduction to Advertising</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>IKS</td>
                    <td>INDIAN KNOWLEDGE SYSTEM</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>CC (ANY ONE)</td>
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
                    <td>Major</td>
                    <td>Database Systems</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Major</td>
                    <td>Computer Science Major Practical -I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Minor</td>
                    <td>Data Analysis and Visualization with R</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Minor</td>
                    <td>Computer Science Minor Practical -I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>VSC</td>
                    <td>Fundamentals of Open Source Software’s</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>SEC</td>
                    <td>Advanced Python Programming</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>AEC</td>
                    <td>Communication Skills in English -II</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>VEC</td>
                    <td>Constitution of India - II</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>OE1</td>
                    <td>Personal Taxation</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>OE2</td>
                    <td>Fundamentals of Advertising</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>CC (Same as in Previous Sem)</td>
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
            <td>Major</td>
            <td>Advance Data Structures and Algorithms</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Major</td>
            <td>Operating Systems</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Major</td>
            <td>Computer Science Major Practical - III</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Minor</td>
            <td>Java Programming</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Minor</td>
            <td>ASP.Net with C#</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Minor</td>
            <td>Computer Science Minor Practical - III</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>7</td>
            <td>VSC</td>
            <td>Digital Marketing</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>8</td>
            <td>SEC</td>
            <td>Graphics Design</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>9</td>
            <td>AEC</td>
            <td>Communication Skills in Hindi -I</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>10</td>
            <td>AEC</td>
            <td>Communication Skills in Marathi -I</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>11</td>
            <td>AEC</td>
            <td>Communication Skills in Tamil -I</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>12</td>
            <td>OE</td>
            <td>Cyber Laws & Corporate Laws</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>13</td>
            <td>CC (Same as in Previous Sem)</td>
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
        <div id="sem4" class="tab-content">
        <h3>Semester 4</h3>
        <!-- Semester 4 Table -->
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
            <td>Mobile Application Development</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Major</td>
            <td>Computer Networks</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Major</td>
            <td>Computer Science Major Practical IV</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Major</td>
            <td>Computer Science Major Practical V</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Minor</td>
            <td>IoT Technologies</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Minor</td>
            <td>Computer Science Minor Practical IV</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>7</td>
            <td>VSC</td>
            <td>Software Engineering</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>8</td>
            <td>CEP</td>
            <td>Community Engagement Service Project</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>9</td>
            <td>AEC</td>
            <td>Communication Skills in Hindi -II</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>10</td>
            <td>AEC</td>
            <td>Communication Skills in Marathi -II</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>11</td>
            <td>AEC</td>
            <td>Communication Skills in Tamil -II</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>12</td>
            <td>OE</td>
            <td>Intellectual Property Laws</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>13</td>
            <td>CC (Same as in Previous Sem)</td>
            <td>NCC</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>14</td>
            <td>CC (Same as in Previous Sem)</td>
            <td>NSS</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>15</td>
            <td>CC (Same as in Previous Sem)</td>
            <td>DLLE</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>16</td>
            <td>CC (Same as in Previous Sem)</td>
            <td>Dramatics</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>17</td>
            <td>CC (Same as in Previous Sem)</td>
            <td>Fine Art</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>18</td>
            <td>CC (Same as in Previous Sem)</td>
            <td>Yoga</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>19</td>
            <td>CC (Same as in Previous Sem)</td>
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
        <div id="sem5" class="tab-content">
        <h3>Semester 5</h3>
        <!-- Semester 5 Table -->
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
            <td>Artificial Intelligence</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Major</td>
            <td>Block Chain Technology – A Quick Introduction</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Major</td>
            <td>Game Programming</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Major</td>
            <td>Cloud Computing and Web Services</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Major</td>
            <td>Artificial Intelligence and Ancient Indian Thoughts</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Major</td>
            <td>Computer Science Major Practical VI</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Major</td>
            <td>Computer Science Major Practical VII</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Elective</td>
            <td>Information and Network Security</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Elective</td>
            <td>Practical of Information and Network Security</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>10</td>
            <td>VSC</td>
            <td>Next Generation Technologies</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>11</td>
            <td>FP</td>
            <td>Field Project</td>
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
              <!-- SEMESTER 6 -->
  <div id="sem6" class="tab-content">
    <h2 class="text-2xl font-semibold mb-4">Semester 6</h2>
    <p class="text-gray-600">Content coming soon...</p>
  </div>
    

    <footer>
        <div class="footer-content">
            <p>SIWS N.R. Swamy College of Commerce & Economics and Smt. Thirumalai College of Science (Autonomous)</p>
            <p>Wadala, Mumbai 400031 | Phone: +91-22-24143335 | Email: info@siwscollege.edu.in</p>
            <p>© 2023 SIWS College. All Rights Reserved.</p>
        </div>
    </footer>

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
