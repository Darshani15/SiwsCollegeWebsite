//bcom_accounting and finance.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B.Com Accounting and Finance Program</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        .tabs {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .tabs button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            margin: 0 5px;
            border-radius: 5px;
        }

        .tabs button:hover {
            background-color: #0056b3;
        }

        .tabs button.active {
            background-color: #0056b3;
            font-weight: bold;
        }

        .tab-content {
            display: none;
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-top: none;
        }

        .tab-content table {
            width: 100%;
            border-collapse: collapse;
            background-color: #f9f9f9;
        }

        .tab-content th, .tab-content td {
            border: 1px solid #ddd;
            padding: 12px 15px;
            text-align: center;
        }

        .tab-content th {
            background-color: #007BFF;
            color: white;
        }

        .tab-content tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .tab-content tr:last-child {
            font-weight: bold;
        }

        .tab-content .total-row {
            background-color: #ffe0b3;
        }
    </style>
</head>
<body>

    <h1>B.Com Accounting and Finance Program</h1>
    <h2>Course Structure</h2>

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
                    <td>Financial Accounting - I</td>
                    <td>4</td>
                    <td>4</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Cost Accounting - I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Business Environment - I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Minor</td>
                    <td>Financial Management - I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Skill Enhancement Course (SEC)</td>
                    <td>Communication Skills in English - I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Ability Enhancement Course (AEC)</td>
                    <td>Constitution of India - I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Value Education Course (VEC)</td>
                    <td>Business Mathematics</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Open Elective I (OE I)</td>
                    <td>Introduction to Computer Science - I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Open Elective II (OE II)</td>
                    <td>INDIAN KNOWLEDGE SYSTEM</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Co-Curricular (Any One)</td>
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
                    <td>Fine Arts</td>
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

                <tr class="total-row">
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
                    <td>Financial Accounting - II</td>
                    <td>4</td>
                    <td>4</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Cost Accounting - II</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Business Environment - II</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Minor</td>
                    <td>Business Environment - II</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Vocational Skill Course (VSC)</td>
                    <td>Accounting Software - I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Skill Enhancement Course (SEC)</td>
                    <td>Management Accounting - I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Ability Enhancement Course (AEC)</td>
                    <td>Communication Skills in English - II</td>
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
                    <td>Co-Curricular (Same as in previous Semester)</td>
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
                    <td>Fine Arts</td>
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

                <tr class="total-row">
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
            <td>Financial Accounting - III</td>
            <td>4</td>
            <td>4</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td></td>
            <td>Auditing</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td></td>
            <td>Accounting & Taxation in Ancient India</td>
            <td>2</td>
            <td>2</td>
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
            <td>Accounting Software - II</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Skill Enhancement Course (SEC)</td>
            <td>Management Accounting - II</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Ability Enhancement Course (AEC)</td>
            <td>Communication Skills in Hindi -I</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td></td>
            <td>Communication Skills in Marathi -I</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td></td>
            <td>Communication Skills in Tamil -I</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td></td>
            <td>Communication Skills in Sanskrit -I</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Open Elective (OE)</td>
            <td>Basic Excel</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Co-Curricular (Same as in previous Semester)</td>
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
            <td>Fine Arts</td>
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
        <tr class="total-row">
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
            <td>Financial Accounting - IV</td>
            <td>4</td>
            <td>4</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td></td>
            <td>Direct Taxes</td>
            <td>4</td>
            <td>4</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Minor</td>
            <td>Macro Economics</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td></td>
            <td>Corporate Laws</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Vocational Skill Course (VSC)</td>
            <td>Project Report for New Business</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Community Engagement Project (CEP)</td>
            <td>Community Engagement Service Project</td>
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
            <td>Open Elective (OE)</td>
            <td>Advanced Excel</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Co-Curricular (Same as in previous Semester)</td>
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
            <td>Fine Arts</td>
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
        <tr class="total-row">
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
            <td>Financial Accounting - V</td>
            <td>4</td>
            <td>4</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td></td>
            <td>Cost Accounting - III</td>
            <td>4</td>
            <td>4</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td></td>
            <td>Security Analysis & Portfolio Management</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Minor</td>
            <td>Econometrics in Finance</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td></td>
            <td>Cyber Law & IPR</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Vocational Skill Course (VSC)</td>
            <td>Financial Modelling</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Open Elective (OE)</td>
            <td>Advanced Direct Tax</td>
            <td>4</td>
            <td>4</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Field Project (FP)</td>
            <td>Field Project</td>
            <td>2</td>
            <td>2</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr class="total-row">
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




    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }

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
