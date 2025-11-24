<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - SIWS</title>
    <!-- Tailwind CSS CDN for easy styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Custom styles with professional color scheme */
        :root {
            --primary-dark: #1a365d;
            --primary: #2c5282;
            --primary-light: #4299e1;
            --accent: #d69e2e;
            --light-bg: #f7fafc;
            --dark-text: #2d3748;
            --light-text: #718096;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background-color: var(--light-bg);
            color: var(--dark-text);
        }
        
        .navbar {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .nav-link {
            transition: all 0.3s ease;
            position: relative;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: var(--accent);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 80%;
        }
        
        .nav-link:hover,
        .nav-link.active {
            color: white;
        }
        
        .section {
            display: none;
            animation: fadeIn 0.5s ease forwards;
        }
        
        .section.active {
            display: block;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .section-heading {
            position: relative;
            padding-bottom: 1rem;
            margin-bottom: 2rem;
        }
        
        .section-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--accent);
        }
        
        .value-item, .leader-card {
            transition: all 0.3s ease;
        }
        
        .value-item:hover, .leader-card:hover {
            background-color: #edf2f7;
            transform: translateX(5px);
        }
        
        /* Table styles */
        .advisory-table {
            width: 100%;
            border-collapse: collapse;
            margin: 1.5rem 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            overflow: hidden;
        }
        
        .advisory-table th {
            background-color: var(--primary);
            color: white;
            text-align: left;
            padding: 1rem;
            font-weight: 600;
        }
        
        .advisory-table td {
            padding: 0.75rem 1rem;
            border-bottom: 1px solid #e2e8f0;
        }
        
        .advisory-table tr:nth-child(even) {
            background-color: #f8fafc;
        }
        
        .advisory-table tr:hover {
            background-color: #edf2f7;
        }
        
        .table-container {
            overflow-x: auto;
            margin-bottom: 2rem;
            border-radius: 8px;
        }
        
        .table-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--primary-dark);
            margin: 2rem 0 1rem 0;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--accent);
        }
        
        .department-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--primary);
            margin: 1.5rem 0 0.75rem 0;
            padding-left: 0.5rem;
            border-left: 4px solid var(--accent);
        }
    </style>
</head>
<body>
    <header class="navbar p-4 rounded-b-lg sticky top-0 z-50">
        <nav class="container mx-auto flex flex-col md:flex-row items-center justify-between">
            <!-- Brand/Logo -->
            <div class="flex items-center mb-4 md:mb-0">
                <a href="#" class="text-3xl font-bold text-white rounded-md p-2 transition-colors duration-200 flex items-center">
                    <i class="fas fa-graduation-cap mr-2"></i> SIWS
                </a>
            </div>

            <!-- Navigation Links -->
            <ul class="flex flex-wrap justify-center space-x-2 md:space-x-4">
                <li><a href="#" data-target="about" class="nav-link text-white font-medium px-3 py-2 rounded-md active">About</a></li>
                <li><a href="#" data-target="discover-siws" class="nav-link text-white font-medium px-3 py-2 rounded-md">Discover SIWS</a></li>
                <li><a href="#" data-target="apex-body" class="nav-link text-white font-medium px-3 py-2 rounded-md">Apex Body</a></li>
                <li><a href="#" data-target="advisory" class="nav-link text-white font-medium px-3 py-2 rounded-md">Advisory</a></li>
                <li><a href="#" data-target="staff" class="nav-link text-white font-medium px-3 py-2 rounded-md">Staff</a></li>
            </ul>
        </nav>
    </header>

    <main class="container mx-auto mt-8 p-4 md:p-6">
        <!-- General About Us Section -->
        <section id="about" class="section active bg-white rounded-xl shadow-lg p-6 md:p-8 mb-8">
            <h1 class="text-3xl md:text-4xl text-center font-bold text-gray-800 mb-6 section-heading">About Us</h1>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-6 md:mb-0 md:pr-6">
                    <img src="images/siws.jpg" alt="SIWS Campus" class="rounded-lg shadow-md w-full">
                </div>
                <div class="md:w-1/2">
                    <p class="text-gray-700 leading-relaxed text-lg mb-4">
                        Welcome to the About Us page of SIWS. Here you can learn more about our mission, vision, and the people who make our organization thrive. We are dedicated to providing excellent education and fostering responsible citizens.
                    </p>
                    <p class="text-gray-700 leading-relaxed text-lg">
                        Established with a vision to create an institution of brilliance, SIWS has been at the forefront of educational excellence for decades. Our commitment to holistic development and community engagement sets us apart as a premier educational institution.
                    </p>
                </div>
            </div>
        </section>

        <!-- Discover SIWS Section -->
        <section id="discover-siws" class="section bg-white rounded-xl shadow-lg p-6 md:p-8 mb-8">
            <h2 class="text-2xl md:text-3xl text-center font-bold text-gray-800 mb-6 section-heading">Discover the Rich Legacy of SIWS College</h2>

            <!-- Image for Discover SIWS -->
            <div class="flex justify-center mb-8">
                <img src="images/Discover.jpg" alt="SIWS College Campus" class="rounded-lg shadow-lg w-full md:w-3/4 object-cover">
            </div>

            <blockquote class="text-gray-700 leading-relaxed text-lg mb-8 border-l-4 border-blue-500 pl-4 italic max-w-3xl mx-auto bg-blue-50 p-4 rounded-r-lg">
                "Vidya Dhanam Sarva Dhanat Pradhanam" emphasizes individual intellectual development, collaborative learning, and a strong commitment to serving the broader community.
            </blockquote>

            <div class="grid md:grid-cols-2 gap-8 mb-10">
                <div>
                    <h3 class="text-xl md:text-2xl font-semibold text-gray-800 mb-4">Overview</h3>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        S.I.W.S. Degree College in Commerce and Economics was established in 1980 and Smt. Thirumalai College of Science in 1990. The Vision of SIWS Colleges is to continually strive to respond to realities and social changes through knowledge empowerment.
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        The campus has an environment of pluralism and cultural diversity adapting to the emerging challenges of the evolving global community. A plethora of activities are planned and executed through curricular, co-curricular and extra-curricular activities to enable the students to be empowered with knowledge, life skills and face the rapidly changing interconnected world.
                    </p>
                </div>
                <div>
                    <h3 class="text-xl md:text-2xl font-semibold text-gray-800 mb-4">Our Vision & Mission</h3>
                    <div class="bg-blue-50 p-4 rounded-lg mb-4">
                        <h4 class="text-lg font-semibold text-blue-800 mb-2">Vision</h4>
                        <p class="text-gray-700">
                            To be an educational institution of brilliance that continually strives to respond to realities and social changes through knowledge empowerment.
                        </p>
                    </div>
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h4 class="text-lg font-semibold text-blue-800 mb-2">Mission</h4>
                        <p class="text-gray-700">
                            In pursuance of its vision, SIWS is dedicated to produce socially responsible and intellectually capable citizens of India.
                        </p>
                    </div>
                </div>
            </div>

            <h3 class="text-xl md:text-2xl font-semibold text-gray-800 mb-4 text-center">Our Values</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                <div class="value-item bg-blue-50 p-4 rounded-lg flex items-center">
                    <i class="fas fa-medal text-blue-600 text-xl w-8"></i>
                    <span class="ml-3">Excellence in Education</span>
                </div>
                <div class="value-item bg-blue-50 p-4 rounded-lg flex items-center">
                    <i class="fas fa-users text-blue-600 text-xl w-8"></i>
                    <span class="ml-3">Inclusivity and Equity</span>
                </div>
                <div class="value-item bg-blue-50 p-4 rounded-lg flex items-center">
                    <i class="fas fa-leaf text-blue-600 text-xl w-8"></i>
                    <span class="ml-3">Sustainability and Environmental Responsibility</span>
                </div>
                <div class="value-item bg-blue-50 p-4 rounded-lg flex items-center">
                    <i class="fas fa-handshake text-blue-600 text-xl w-8"></i>
                    <span class="ml-3">Community Engagement</span>
                </div>
                <div class="value-item bg-blue-50 p-4 rounded-lg flex items-center">
                    <i class="fas fa-microchip text-blue-600 text-xl w-8"></i>
                    <span class="ml-3">Technological Advancement</span>
                </div>
                <div class="value-item bg-blue-50 p-4 rounded-lg flex items-center">
                    <i class="fas fa-user-tie text-blue-600 text-xl w-8"></i>
                    <span class="ml-3">Ethical Leadership</span>
                </div>
            </div>

            <h3 class="text-xl md:text-2xl font-semibold text-gray-800 mb-4 text-center">Core Goals</h3>
            <p class="text-gray-700 leading-relaxed text-lg mb-6 text-center max-w-3xl mx-auto">
                At SIWS College, our core goals are achieving academic excellence, inculcating moral values, promoting multicultural harmony and inducing social responsibility.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="card bg-white p-4 rounded-lg shadow border-l-4 border-blue-500">
                    <i class="fas fa-graduation-cap text-blue-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold">Academic Excellence</h4>
                </div>
                <div class="card bg-white p-4 rounded-lg shadow border-l-4 border-blue-500">
                    <i class="fas fa-people-arrows text-blue-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold">Inclusivity</h4>
                </div>
                <div class="card bg-white p-4 rounded-lg shadow border-l-4 border-blue-500">
                    <i class="fas fa-seedling text-blue-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold">Sustainability</h4>
                </div>
            </div>
        </section>

        <!-- Apex Body Section -->
        <section id="apex-body" class="section bg-white rounded-xl shadow-lg p-6 md:p-8 mb-8">
            <h2 class="text-2xl md:text-3xl text-center font-bold text-gray-800 mb-6 section-heading">Apex Body</h2>

            <h3 class="text-xl md:text-2xl font-semibold text-gray-800 mb-6 text-center">Our Founders</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                <div class="leader-card bg-gray-50 rounded-lg shadow-md p-6 text-center">
                    <div class="w-24 h-24 mx-auto mb-4 rounded-full bg-blue-100 flex items-center justify-center">
                        <i class="fas fa-user-circle text-blue-600 text-4xl"></i>
                    </div>
                    <h4 class="text-lg font-bold text-gray-800 mb-2">Shri. N.V. Sarma</h4>
                    <p class="text-gray-600 text-sm mb-2">Founder of SIWS School - 1934</p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Shri. N. V. Sarma, the founder of SIWS, South Indian's Welfare Society, with a handful of middle-class persons he established the Society on Christmas Day in 1933 and started a primary school in a garage on July 4, 1934.
                    </p>
                </div>
                <div class="leader-card bg-gray-50 rounded-lg shadow-md p-6 text-center">
                    <div class="w-24 h-24 mx-auto mb-4 rounded-full bg-blue-100 flex items-center justify-center">
                        <i class="fas fa-user-circle text-blue-600 text-4xl"></i>
                    </div>
                    <h4 class="text-lg font-bold text-gray-800 mb-2">Shri. N.R. Swamy</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Shri N.R. Swamy migrated from a small village in South India to Bombay, in search of a job in 1929. He was a Founder of Ultramarine & Pigments Ltd and of Thirumalai Chemicals Ltd.
                    </p>
                </div>
                <div class="leader-card bg-gray-50 rounded-lg shadow-md p-6 text-center">
                    <div class="w-24 h-24 mx-auto mb-4 rounded-full bg-blue-100 flex items-center justify-center">
                        <i class="fas fa-user-circle text-blue-600 text-4xl"></i>
                    </div>
                    <h4 class="text-lg font-bold text-gray-800 mb-2">Shri N.S. Iyengar</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Shri. N.S. Iyengar a man with a vision, humility and gratitude. S.I.W.S. College was started in 1980 by Shri N.S. Iyengar in memory of his beloved brother Shri N.R. Swamy.
                    </p>
                </div>
            </div>

            <h3 class="text-xl md:text-2xl font-semibold text-gray-800 mb-6 text-center">Leadership</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="bg-blue-50 rounded-lg p-6 flex items-center">
                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                        <i class="fas fa-chair text-blue-600 text-2xl"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-blue-800">Shri. R. Radhakrishnan</h4>
                        <p class="text-gray-700">Chairman</p>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-lg p-6">
                    <h4 class="text-lg font-semibold text-gray-800 mb-3">Board of Trustees Members</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-user-tie text-blue-600 w-6 mr-2"></i>
                            <span>Dr.V.Rangaraj - Vice Chairman</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-user-tie text-blue-600 w-6 mr-2"></i>
                            <span>Shri. M. Ananthasubramanian - Hon. Gen. Secretary</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-user-tie text-blue-600 w-6 mr-2"></i>
                            <span>Shri.G.S.Subramanian - Treasurer</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Advisory Section -->
        <section id="advisory" class="section bg-white rounded-xl shadow-lg p-6 md:p-8 mb-8">
            <h2 class="text-2xl md:text-3xl text-center font-bold text-gray-800 mb-6 section-heading">Advisory Board</h2>
            <p class="text-gray-700 text-center max-w-2xl mx-auto mb-8">
                Our advisory boards consist of experienced professionals and academic leaders who guide our institution toward excellence and innovation in education.
            </p>
            
            <div class="table-container">
                <h3 class="table-title">Governing Body</h3>
                <table class="advisory-table">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name</th>
                            <th>Designation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>Mr. R. Radhakrishnan</td><td>Chairperson</td></tr>
                        <tr><td>2</td><td>Dr. V. Rangaraj</td><td>Management</td></tr>
                        <tr><td>3</td><td>Mr. M. Ananthasubramanian</td><td>Management</td></tr>
                        <tr><td>4</td><td>Mr. G. S. Subramanian</td><td>Management</td></tr>
                        <tr><td>5</td><td>Mr. T.V. Krishnan</td><td>Management</td></tr>
                        <tr><td>6</td><td>Dr. Rupesh Raut</td><td>State Government Nominee</td></tr>
                        <tr><td>7</td><td>Dr. Kiran Mangaonkar</td><td>Management Nominee</td></tr>
                        <tr><td>8</td><td>Dr. Pradnya Prabhu</td><td>University Nominee</td></tr>
                        <tr><td>9</td><td>Dr. C.A. Vaibhav Banjan</td><td>Principal's Nominee</td></tr>
                        <tr><td>10</td><td>Mrs. Neeta Khanolkar</td><td>Principal's Nominee</td></tr>
                        <tr><td>11</td><td>Mrs. Jayashree Mhatre</td><td>Administrative Staff</td></tr>
                        <tr><td>12</td><td>Dr. Manali Londhe</td><td>Member Secretary</td></tr>
                    </tbody>
                </table>
            </div>
            
            <div class="table-container">
                <h3 class="table-title">Academic Council</h3>
                <table class="advisory-table">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name</th>
                            <th>Designation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>Dr. Manali Londhe</td><td>Chairperson</td></tr>
                        <tr><td>2</td><td>Dr. Shobhana Vasudevan</td><td>VC nominee</td></tr>
                        <tr><td>3</td><td>Dr. Himanshu Dawda</td><td>VC nominee</td></tr>
                        <tr><td>4</td><td>Dr. Anita Kanwar</td><td>VC nominee</td></tr>
                        <tr><td>5</td><td>Dr. Srinivasan R. Iyengar</td><td>Governing Body Nominee</td></tr>
                        <tr><td>6</td><td>Dr. Radhakrishnan Pillai</td><td>Governing Body Nominee</td></tr>
                        <tr><td>7</td><td>Mrs. Nandini Menon</td><td>Governing Body Nominee</td></tr>
                        <tr><td>8</td><td>Mr. Nellore Srinivasan</td><td>Governing Body Nominee</td></tr>
                        <tr><td>9</td><td>Ms. Neeta Khanolkar</td><td>Head of Department</td></tr>
                        <tr><td>10</td><td>Dr. CA Vaibhav Banjan</td><td>Head of Department</td></tr>
                        <tr><td>11</td><td>Ms. Anagha Bapat</td><td>Head of Department</td></tr>
                        <tr><td>12</td><td>Dr. Satish Bhalekar</td><td>Head of Department</td></tr>
                        <tr><td>13</td><td>Ms. Santha Maria Rani</td><td>Head of Department</td></tr>
                        <tr><td>14</td><td>Ms. Suchita Revankar</td><td>Head of Department</td></tr>
                        <tr><td>15</td><td>Dr. Subhashini Iyengar</td><td>Head of Department</td></tr>
                        <tr><td>16</td><td>Dr. Swapnesh Rangnekar</td><td>Chairperson-BOS(EVS)</td></tr>
                        <tr><td>17</td><td>Dr. Sanghamitra Mishra</td><td>Chairperson-BOS(Business Economics)</td></tr>
                        <tr><td>18</td><td>Dr. Kirti Nakhare</td><td>Chairperson-BOS(English)</td></tr>
                        <tr><td>19</td><td>Dr. G.V.V. Hemasundar</td><td>Chairperson-BOS(Mathematics)</td></tr>
                        <tr><td>20</td><td>Mr. Ayyappan Iyer</td><td>Chairperson-BOS(Management)</td></tr>
                        <tr><td>21</td><td>Mr. Arul Kumar Pandian</td><td>Chairperson-BOS(Law)</td></tr>
                        <tr><td>22</td><td>Ms. Betty Mathew</td><td>Co-ordinator Co-Curricular Courses</td></tr>
                        <tr><td>23</td><td>Mrs. Rekha Bhatia</td><td>Senior Teacher</td></tr>
                        <tr><td>24</td><td>Dr. Helen Selvaraj</td><td>Senior Teacher</td></tr>
                        <tr><td>25</td><td>CA Sushanti Wandrekar</td><td>Senior Teacher</td></tr>
                        <tr><td>26</td><td>Ms. Virgin Fernando</td><td>Senior Teacher</td></tr>
                        <tr><td>27</td><td>Dr. Sandeep Vansutre</td><td>Controller of Examination</td></tr>
                        <tr><td>28</td><td>Ms. Mariamma Danny</td><td>Member Secretary</td></tr>
                    </tbody>
                </table>
            </div>
            
            <div class="table-container">
                <h3 class="table-title">Finance Committee</h3>
                <table class="advisory-table">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name</th>
                            <th>Designation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>Dr. Manali Londhe</td><td>Chairperson</td></tr>
                        <tr><td>2</td><td>Shri. G.S. Subramanian</td><td>Governing Body Nominee</td></tr>
                        <tr><td>3</td><td>Dr. CA Vaibhav Banjan</td><td>Senior Faculty</td></tr>
                        <tr><td>4</td><td>Mr. R. Chandrashekhar</td><td>Officer In-charge – Finance and Accounts</td></tr>
                    </tbody>
                </table>
            </div>
            
            <div class="table-container">
                <h3 class="table-title">College Development Committee</h3>
                <table class="advisory-table">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name</th>
                            <th>Designation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>Dr. Manali Londhe</td><td>Principal</td></tr>
                        <tr><td>2</td><td>Dr. C.A. Vaibhav Banjan</td><td>Vice-Principal (Commerce)</td></tr>
                        <tr><td>3</td><td>Mrs. Neeta Khanolkar</td><td>Vice-Principal (Science)</td></tr>
                        <tr><td>4</td><td>Mr. Ayyappan Iyer</td><td>Vice-Principal (Self-Finance)</td></tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Staff Section (Placeholder) -->
        <section id="staff" class="section bg-white rounded-xl shadow-lg p-6 md:p-8 mb-8">
            <h2 class="text-2xl md:text-3xl text-center font-bold text-gray-800 mb-6 section-heading">Our Staff</h2>
            
                <!-- Executive Council -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold text-maroon mb-4">1. Executive Council</h3>
                    <div class="table-container">
                        <table class="advisory-table">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dr. Manali Londhe</td>
                                    <td>Principal</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>CA Vaibhav Banjan</td>
                                    <td>Vice-Principal (Commerce)</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Smt. Neeta Khanolkar</td>
                                    <td>Vice-Principal (Science)</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Shri. Ayyappan Iyer</td>
                                    <td>Vice-Principal (Self Financing Courses)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Teaching Faculty -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold text-maroon mb-6">2. Teaching Faculty</h3>
                    
                    <!-- Commerce -->
                    <h4 class="department-title">Commerce</h4>
                    <div class="table-container">
                        <table class="advisory-table">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dr. Vaibhav Narayan Banjan</td>
                                    <td>Vice Principle (Commerce), HOD (Accountancy)</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Dr. Helen Selvaraj</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>CA Sushanti Wandrekar</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Dr. Kirti Yogesh Nakhare</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Dr. Sanghamitra Mishra</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Dr. Swapnesh Rangnekar</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>DR. SUBHASHINI IYENGAR</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>DR. RAVINDRA PRADUMAN SINGH</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Mr. Sai Manohar Rogye</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Mr. Arul Kumar Pandian</td>
                                    <td>Assistant professor</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Science -->
                    <h4 class="department-title">Science</h4>
                    <div class="table-container">
                        <table class="advisory-table">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Smt. Neeta Khanolkar</td>
                                    <td>Vice-Principal (Science), HOD (Microbiology)</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Ms. Rekha Vijay Bhatia</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Mrs. Deepali Sachin Khedekar</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Ms. Anitha Johnson</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Ms. Vaidehi Vinod Kumar Nanavate</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Mrs. Anagha Bapat</td>
                                    <td>HOD (Physics)</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Dr. Sandeep Sudhakar Vansutre</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Mrs. Mariamma Danny</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Dr. Satish M. Bhalekar</td>
                                    <td>HOD(Chemistry)</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Dr. Tanuja Prakash Parulekar</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Mrs. BETTY MATHEW</td>
                                    <td>Assistant professor</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Self Financing Commerce -->
                    <h4 class="department-title">Self Financing Commerce</h4>
                    <div class="table-container">
                        <table class="advisory-table">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mr. Baljeet D. Saw</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Mr. Ashish Kushe</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ms. Pranali Pradeep Shinde</td>
                                    <td>Assistant professor</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Self Financing Science -->
                    <h4 class="department-title">Self Financing Science</h4>
                    <div class="table-container">
                        <table class="advisory-table">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Er. R Santha Maria Rani</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Mrs. SUCHITA U. REVANKAR</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>B. VirginMary Fernando</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Ms. Muskaan Kursija</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Dr. Nityashree Nadar</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Ms. Gayatri Venkatachalam</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Mrs. Ruhi Prajal Ghogle</td>
                                    <td>Assistant professor</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Tr. Nikhil Mamaniya</td>
                                    <td>Librarian & Assistant professor</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Supporting Staff -->
                <div>
                    <h3 class="text-2xl font-bold text-maroon mb-6">3. Supporting Staff</h3>
                    
                    <!-- Aided - Non Teaching -->
                    <h4 class="department-title">Aided - Non Teaching</h4>
                    <div class="table-container">
                        <table class="advisory-table">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mrs. Jayashree Dinesh Mhatre</td>
                                    <td>Office Superintendent</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Mr. Krishnan Parameshwaran Iyer</td>
                                    <td>Senior-Clerk</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Mr. Somnath Zendu Akhadmal</td>
                                    <td>Head-Clerk</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Mrs. Sundarlakshmi Mohansundarram</td>
                                    <td>Senior-Clerk</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Mrs. Roselin Christopher</td>
                                    <td>Senior-Clerk</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Mr. Pradeep Sitaram Sutake</td>
                                    <td>Junior-Clerk</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Mr. Jotiba Dashrath Toraskar</td>
                                    <td>Junior-Clerk</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Mr. Ashok Kawal Bidlan</td>
                                    <td>Junior-Clerk</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Mr. Chandrasekar Ramachandran</td>
                                    <td>Junior-Clerk</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Mr. Suranjan Lekharaj Karotia</td>
                                    <td>Laboratory Assistant</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Society- Non Teaching -->
                    <h4 class="department-title">Society- Non Teaching</h4>
                    <div class="table-container">
                        <table class="advisory-table">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Rajamani N. K.</td>
                                    <td>Admin Staff</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Arun Naicker</td>
                                    <td>Admin Staff</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Usha Anchan</td>
                                    <td>Admin Staff</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Jui Choche</td>
                                    <td>Admin Staff</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Suresh Achari</td>
                                    <td>Admin Staff</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Padma Nandi</td>
                                    <td>Peon</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Self finance Course- Non Teaching -->
                    <h4 class="department-title">Self Finance Course- Non Teaching</h4>
                    <div class="table-container">
                        <table class="advisory-table">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Avni Mehta</td>
                                    <td>Clerk</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Kundan Thakur</td>
                                    <td>Clerk</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Swapnil Ptil</td>
                                    <td>IT Dept</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Milind Thakur</td>
                                    <td>IT Dept</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Santosh Gaikwad</td>
                                    <td>Peon</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Nirmala A. Nomul</td>
                                    <td>Peon</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Wilson S. Kasbe</td>
                                    <td>Lab Attn.</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Amol Dalvi</td>
                                    <td>Lab Asst</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Rupesh L. Garad</td>
                                    <td>Lab Attn.</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Satish Dulgach</td>
                                    <td>Peon</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Shashikant M. Vayangankar</td>
                                    <td>Lab Attn.</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Suman Shivaji Khutwad</td>
                                    <td>Peon</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Priyanka Rishikesh Pawar</td>
                                    <td>PA to Principal</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Manisha Tawar</td>
                                    <td>Sweeper</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Anitha Ridlon</td>
                                    <td>Sweeper</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Sanjay Takekar</td>
                                    <td>Sweeper</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Content would go here -->
        </section>

        
    </main>

    <footer class="bg-gray-800 text-white mt-12 py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h3 class="text-xl font-bold">SIWS</h3>
                    <p class="text-gray-400">Excellence in Education Since 1980</p>
                </div>
                <div>
                    <p class="text-gray-400">&copy; 2023 SIWS. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all navigation links
            const navLinks = document.querySelectorAll('.nav-link');
            // Get all sections
            const sections = document.querySelectorAll('.section');
            
            // Add click event to each navigation link
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Get the target section ID from data attribute
                    const targetId = this.getAttribute('data-target');
                    
                    // Remove active class from all links and sections
                    navLinks.forEach(navLink => navLink.classList.remove('active'));
                    sections.forEach(section => section.classList.remove('active'));
                    
                    // Add active class to clicked link
                    this.classList.add('active');
                    
                    // Show the target section
                    document.getElementById(targetId).classList.add('active');
                });
            });
        });
    </script>
</body>
</html> 