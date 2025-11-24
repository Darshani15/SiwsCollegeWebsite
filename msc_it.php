<?php
// msc_information_technology.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Master of Science - Information Technology</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-color: #1a237e;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .program-container {
            padding: 40px 20px;
            background-color: #fff;
            margin: 40px auto;
            max-width: 1000px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .program-container h2 {
            color: #3949ab;
            text-align: center;
            margin-bottom: 20px;
        }

        .program-details {
            font-size: 1.1rem;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .learn-more-btn {
            background-color: #ff9800;
            color: white;
            padding: 10px 16px;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .learn-more-btn:hover {
            background-color: #f57c00;
        }

        footer {
            background-color: #1a237e;
            color: white;
            padding: 20px 0;
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <header>
        <h1>SIWS College - Master of Science - Information Technology</h1>
    </header>

    <div class="program-container">
        <h2>Master of Science - Information Technology</h2>
        
        <div class="program-details">
            <p><strong>Duration:</strong> 2 years (4 semesters)</p>
            <p><strong>Eligibility:</strong> B.Sc. IT / B.Sc. CS / B.E. / B.Tech or an equivalent degree with minimum marks as per University norms.</p>
            <p><strong>Overview:</strong> The M.Sc. (IT) program equips students with advanced knowledge of computing technologies, software development, networking, data science, and artificial intelligence. It integrates both theoretical and practical aspects of modern IT to prepare students for global opportunities in the IT industry.</p>
            <p>The curriculum includes subjects such as Advanced Data Structures, Database Systems, Cloud Computing, Information Security, Machine Learning, Big Data Analytics, and Deep Learning. Students also engage in hands-on labs, seminars, and a final-year dissertation/project to build strong industry-ready skills.</p>
            <p><strong>Career Opportunities:</strong> Graduates can pursue careers as Software Developers, Data Analysts, Cloud Engineers, Cybersecurity Specialists, Machine Learning Engineers, IT Consultants, and Research Professionals in leading technology firms and startups.</p>
        </div>
        
        <div class="program-learn">
            <button class="learn-more-btn" onclick="window.location.href='msc_it_syllabus.php'">Find Out What You’ll Learn</button>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <p>SIWS N.R. Swamy College of Commerce & Economics and Smt. Thirumalai College of Science (Autonomous)</p>
            <p>Wadala, Mumbai 400031 | Phone: +91-22-24143335 | Email: info@siwscollege.edu.in</p>
            <p>© <?php echo date('Y'); ?> SIWS College. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
