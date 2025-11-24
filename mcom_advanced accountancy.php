<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>M.Com AA Program</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .tabs {
            margin-bottom: 20px;
        }

        .tabs button {
            background-color: #1a237e;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        .tabs button:hover {
            background-color: #3949ab;
        }

        .semester-table {
            display: none;
        }

        .semester-table.active {
            display: block;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #1a237e;
            color: white;
        }

        .total-row {
            background-color: #ff9800;
            font-weight: bold;
        }

        .programme-info {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 5px;
        }

        .programme-info span {
            margin-right: 20px;
        }
    </style>
</head>
<body>

    <div class="programme-info">
        <span><strong>Programme Profile:</strong> M.Com. AA</span>
        <span><strong>Duration:</strong> 4 semesters</span>
        <span><strong>Eligibility:</strong> A student must have passed B.Com./BMS/BBI/BAF</span>
    </div>

    <!-- Tabs for switching between Semesters -->
    <div class="tabs">
        <button onclick="showSemester('sem1')">Sem 1</button>
        <button onclick="showSemester('sem2')">Sem 2</button>
        <button onclick="showSemester('sem3')">Sem 3</button>
        <button onclick="showSemester('sem4')">Sem 4</button>
    </div>

    <!-- Semester 1 Table -->
    <div id="sem1" class="semester-table active">
        <table>
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Courses</th>
                    <th>Title</th>
                    <th>Credits</th>
                    <th>Lectures / week</th>
                    <th>Syllabus</th>
                    <th>Examination Patterns</th>
                    <th>E-content / Notes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mcom (AA) SEM I</td>
                    <td>Advanced Financial Accounting</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mcom (AA) SEM I</td>
                    <td>Advanced Cost Accounting</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Mcom (AA) SEM I</td>
                    <td>Fundamentals of Financial Management</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Mcom (AA) SEM I</td>
                    <td>Introduction to Strategic Management - I</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Mcom (AA) SEM I</td>
                    <td>Research Methodology</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Mcom (AA) SEM I</td>
                    <td>Financial Statement Analysis</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr class="total-row">
                    <td colspan="3">Total</td>
                    <td>22</td>
                    <td>22</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Semester 2 Table -->
    <div id="sem2" class="semester-table">
        <table>
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Courses</th>
                    <th>Title</th>
                    <th>Credits</th>
                    <th>Lectures / week</th>
                    <th>Syllabus</th>
                    <th>Examination Patterns</th>
                    <th>E-content / Notes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mcom (AA) SEM II</td>
                    <td>Corporate Accounting</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mcom (AA) SEM II</td>
                    <td>Strategic Cost Accounting</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Mcom (AA) SEM II</td>
                    <td>Fundamentals of Investment Management</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Mcom (AA) SEM II</td>
                    <td>Strategic Human Resource Management</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Mcom (AA) SEM II</td>
                    <td>Business Valuation</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Mcom (AA) SEM II</td>
                    <td>On-job Training</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr class="total-row">
                    <td colspan="3">Total</td>
                    <td>22</td>
                    <td>22</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Semester 3 Table -->
    <div id="sem3" class="semester-table">
        <table>
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Courses</th>
                    <th>Title</th>
                    <th>Credits</th>
                    <th>Lectures / week</th>
                    <th>Syllabus</th>
                    <th>Examination Patterns</th>
                    <th>E-content / Notes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mcom (AA) SEM III</td>
                    <td>Advanced Direct Taxation</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mcom (AA) SEM III</td>
                    <td>Advanced Financial Management</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Mcom (AA) SEM III</td>
                    <td>Advanced Auditing</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Mcom (AA) SEM III</td>
                    <td>Business Ethics</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Mcom (AA) SEM III</td>
                    <td>Corporate Tax Planning</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Mcom (AA) SEM III</td>
                    <td>Research Project</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr class="total-row">
                    <td colspan="3">Total</td>
                    <td>22</td>
                    <td>22</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Semester 4 Table -->
    <div id="sem4" class="semester-table">
        <table>
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Courses</th>
                    <th>Title</th>
                    <th>Credits</th>
                    <th>Lectures / week</th>
                    <th>Syllabus</th>
                    <th>Examination Patterns</th>
                    <th>E-content / Notes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mcom (AA) SEM IV</td>
                    <td>Strategic Financial Management</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mcom (AA) SEM IV</td>
                    <td>Advanced Indirect Taxes</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Mcom (AA) SEM IV</td>
                    <td>Forensic Accounting & Fraud Examination</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Mcom (AA) SEM IV</td>
                    <td>Financial Services</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Mcom (AA) SEM IV</td>
                    <td>Research Project</td>
                    <td>2</td>
                    <td>2</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr class="total-row">
                    <td colspan="3">Total</td>
                    <td>22</td>
                    <td>22</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function showSemester(semester) {
            // Hide all semester tables
            var tables = document.querySelectorAll('.semester-table');
            tables.forEach(function(table) {
                table.classList.remove('active');
            });

            // Show the selected semester table
            var selectedSemester = document.getElementById(semester);
            selectedSemester.classList.add('active');
        }
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
