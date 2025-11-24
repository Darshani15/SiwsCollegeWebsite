<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIWS College - Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }
        
        /* Header Styles */
        header {
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 15px 0;
        }
        
        .header-container {
            display: flex;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .logo {
            width: 100px;
            height: 100px;
            margin-right: 15px;
        }
        
        .logo img {
            width: 100%;
            height: auto;
        }
        
        .college-info {
            flex: 1;
        }
        
        .college-info h1 {
            font-size: 18px;
            color: #1a237e;
            margin-bottom: 5px;
        }
        
        .college-info p {
            font-size: 12px;
            color: #555;
        }
        
        /* Navigation Bar */
        nav {
            background-color: #1a237e;
            padding: 10px 0;
        }
        
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
        }
        
        .nav-container a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            font-weight: 500;
            transition: background-color 0.3s;
        }
        
        .nav-container a:hover {
            background-color: #303f9f;
        }
        
        /* Welcome Section */
        .welcome-section {
            position: relative;
            text-align: center;
            margin-bottom: 30px;
        }
        
        .welcome-img {
            width: 100%;
            height: 400px;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #555;
            font-size: 24px;
            font-weight: bold;
        }
        
        .welcome-text {
            position: absolute;
            bottom: 30px;
            left: 0;
            right: 0;
            background-color: rgba(26, 35, 126, 0.8);
            color: #fff;
            padding: 15px;
            font-size: 28px;
            font-weight: bold;
            text-transform: uppercase;
        }
        
        /* Content Sections */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
        }
        
        .principal-section {
            display: flex;
            margin-bottom: 30px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .principal-img {
            width: 200px;
            height: 250px;
            background-color: #eee;
            margin-right: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #555;
        }
        
        .principal-message {
            flex: 1;
        }
        
        .principal-message h2 {
            color: #1a237e;
            margin-bottom: 10px;
        }
        
        .principal-message p {
            font-style: italic;
            color: #555;
        }
        
        /* Notice Board */
        .notice-board {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        
        .notice-board h2 {
            color: #1a237e;
            padding-bottom: 10px;
            border-bottom: 2px solid #1a237e;
            margin-bottom: 15px;
        }
        
        .notice-item {
            padding: 10px 0;
            border-bottom: 1px dashed #ccc;
        }
        
        .notice-item:last-child {
            border-bottom: none;
        }
        
        .notice-item a {
            color: #d32f2f;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        
        .notice-item a:hover {
            text-decoration: underline;
        }
        
        .notice-item i {
            margin-right: 10px;
            color: #d32f2f;
        }
        
        /* Recruiters Section */
        .recruiters-section {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            grid-column: 1 / span 2;
        }
        
        .recruiters-section h2 {
            color: #1a237e;
            text-align: center;
            margin-bottom: 20px;
        }
        
        .recruiters-slideshow {
            height: 150px;
            background-color: #eee;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #555;
            font-size: 18px;
        }
        
        /* Additional Sections */
        .additional-sections {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 30px;
            grid-column: 1 / span 2;
        }
        
        .section-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: center;
        }
        
        .section-box h3 {
            color: #1a237e;
            margin-bottom: 15px;
        }
        
        .section-placeholder {
            height: 150px;
            background-color: #eee;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #555;
            margin-bottom: 15px;
        }
        
        /* Social Media */
        .social-media {
            text-align: center;
            margin: 30px 0;
            grid-column: 1 / span 2;
        }
        
        .social-media h2 {
            color: #1a237e;
            margin-bottom: 20px;
        }
        
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        
        .social-icons a {
            display: inline-block;
            width: 50px;
            height: 50px;
            background-color: #1a237e;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 20px;
            transition: background-color 0.3s;
        }
        
        .social-icons a:hover {
            background-color: #303f9f;
        }
        
        /* Footer */
        footer {
            background-color: #1a237e;
            color: #fff;
            padding: 30px 0;
            text-align: center;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .footer-content p {
            margin: 10px 0;
        }
        
        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
            }
            
            .principal-section {
                flex-direction: column;
            }
            
            .principal-img {
                width: 100%;
                margin-right: 0;
                margin-bottom: 15px;
            }
            
            .additional-sections {
                grid-template-columns: 1fr;
            }
            
            .recruiters-section,
            .social-media {
                grid-column: 1;
            }
            /* Recruiters Section */
        .recruiters-section {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            grid-column: 1 / span 2;
        }
        
        .recruiters-section h2 {
            color: #1a237e;
            text-align: center;
            margin-bottom: 25px;
            font-size: 28px;
        }
        
        .slideshow-container {
            position: relative;
            max-width: 1000px;
            height: 200px;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .recruiter-slide {
            display: none;
            position: absolute;
            width: 100%;
            height: 100%;
            animation: round 16s infinite;
            opacity: 0;
            background-size: cover;
            background-position: center;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            font-weight: 600;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        
        .recruiter-slide:nth-child(1) {
            background: linear-gradient(rgba(26, 35, 126, 0.7), rgba(26, 35, 126, 0.7)), url('https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80') center/cover no-repeat;
            animation-delay: 0s;
        }
        
        .recruiter-slide:nth-child(2) {
            background: linear-gradient(rgba(26, 35, 126, 0.7), rgba(26, 35, 126, 0.7)), url('https://images.unsplash.com/photo-1621905252507-b35492cc74b4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80') center/cover no-repeat;
            animation-delay: 4s;
        }
        
        .recruiter-slide:nth-child(3) {
            background: linear-gradient(rgba(26, 35, 126, 0.7), rgba(26, 35, 126, 0.7)), url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80') center/cover no-repeat;
            animation-delay: 8s;
        }
        
        .recruiter-slide:nth-child(4) {
            background: linear-gradient(rgba(26, 35, 126, 0.7), rgba(26, 35, 126, 0.7)), url('https://images.unsplash.com/photo-1560472355-536de3962603?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80') center/cover no-repeat;
            animation-delay: 12s;
        }
        
        @keyframes round {
            0% { opacity: 0; }
            5% { opacity: 1; }
            20% { opacity: 1; }
            25% { opacity: 0; }
            100% { opacity: 0; }
        }
        /* Additional Sections */
        .additional-sections {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-bottom: 30px;
            grid-column: 1 / span 2;
        }
        
        .section-box {
            background-color: #fff;
            padding: 0;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            text-align: center;
            overflow: hidden;
            transition: transform 0.3s;
        }
        
        .section-box:hover {
            transform: translateY(-5px);
        }
        
        .section-box h3 {
            color: #1a237e;
            margin: 20px 0;
            font-size: 20px;
        }
        
        .section-placeholder {
            height: 180px;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            font-size: 18px;
        }
        
        .section-box:nth-child(1) .section-placeholder {
            background-image: linear-gradient(rgba(26, 35, 126, 0.7), rgba(26, 35, 126, 0.7)), url('https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');
        }
        
        .section-box:nth-child(2) .section-placeholder {
            background-image: linear-gradient(rgba(26, 35, 126, 0.7), rgba(26, 35, 126, 0.7)), url('https://images.unsplash.com/photo-1497636577773-f1231844b336?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80');
        }
        
        .section-box:nth-child(3) .section-placeholder {
            background-image: linear-gradient(rgba(26, 35, 126, 0.7), rgba(26, 35, 126, 0.7)), url('https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');
        }
        
        .section-content {
            padding: 0 20px 20px;
        }
        
        .section-content p {
            color: #555;
            margin-bottom: 15px;
        }
        
        .btn {
            display: inline-block;
            background-color: #1a237e;
            color: white;
            padding: 8px 20px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s;
        }
        
        .btn:hover {
            background-color: #283593;
        }
        
        /* Social Media */
        .social-media {
            text-align: center;
            margin: 40px 0 30px;
            grid-column: 1 / span 2;
        }
        
        .social-media h2 {
            color: #1a237e;
            margin-bottom: 25px;
            font-size: 28px;
        }
        
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        
        .social-icons a {
            display: inline-flex;
            width: 60px;
            height: 60px;
            background: linear-gradient(to bottom, #1a237e, #283593);
            color: #fff;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 24px;
            transition: all 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .social-icons a:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }
        
        .social-icons .facebook:hover { background: linear-gradient(to bottom, #3b5998, #2d4373); }
        .social-icons .instagram:hover { background: linear-gradient(to bottom, #e1306c, #c13584); }
        .social-icons .twitter:hover { background: linear-gradient(to bottom, #1da1f2, #0d8bd9); }
        .social-icons .linkedin:hover { background: linear-gradient(to bottom, #0077b5, #005983); }
        .social-icons .youtube:hover { background: linear-gradient(to bottom, #ff0000, #cc0000); }
        
        /* Footer */
        footer {
            background: linear-gradient(to right, #1a237e, #283593);
            color: #fff;
            padding: 40px 0 20px;
            text-align: center;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .footer-content p {
            margin: 10px 0;
            color: #e3f2fd;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 20px 0;
        }
        
        .footer-links a {
            color: #bbdefb;
            text-decoration: none;
            margin: 0 15px;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: #fff;
            text-decoration: underline;
        }
        
        .copyright {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #3949ab;
            color: #bbdefb;
            font-size: 14px;
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .container {
                grid-template-columns: 1fr;
            }
            
            .principal-section {
                flex-direction: column;
            }
            
            .principal-img {
                width: 100%;
                margin-right: 0;
                margin-bottom: 20px;
            }
            
            .additional-sections {
                grid-template-columns: 1fr;
            }
            
            .recruiters-section,
            .social-media {
                grid-column: 1;
            }
        }
        
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                text-align: center;
            }
            
            .logo {
                margin: 0 auto 15px;
            }
            
            .nav-container {
                flex-wrap: wrap;
            }
            
            .nav-container a {
                padding: 12px 15px;
                font-size: 14px;
            }
            
            .welcome-text {
                font-size: 32px;
            }
            
            .social-icons a {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }
            
            .slide-track {
                display: flex;
                width: calc(250px * 8); /* 8 logos: 4 original + 4 duplicates */
                animation: scroll 25s linear infinite;
}

            .slideshow-container {
                overflow: hidden;
                height: 150px;
                background-color: #fff;
                display: flex;
                align-items: center;
                justify-content: flex-start;
}

            .slide-track img {
                width: 250px;
                height: auto;
                margin-right: 30px;
                object-fit: contain;
}

@keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-50%);
  }
}

        }

    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="header-container">
            <div>
                 <img src="images/logo.png" >
            </div>
            <div class="college-info">
                <h1>SIWS N.R. SWAMY COLLEGE OF COMMERCE & ECONOMICS AND</h1>
                <h1>SMT. THIRUMALAI COLLEGE OF SCIENCE (AUTONOMOUS)</h1>
                <p>NAAC Re-Accredited A Grade with 3.15 CGPA | College Code 311 | AISHE CODE.C-34030 | Wadala, Mumbai 400031 | www.siwscollege.edu.in</p>
            </div>
        </div>
    </header>

    <!-- Navigation Bar -->
    <nav>
        <div class="nav-container">
            <a href="about.php">About</a>
            <a href="academics.php">Academics</a>
            <a href="#">Admission</a>
            <a href="#">Ammenties</a>
            <a href="#">Committees</a>
            <a href="#">Contact Us</a>
        </div>
    </nav>

    <!-- Welcome Section -->
    <section class="welcome-section">
        <div >
             <img src="images/campus.png" >
        </div>
        <div class="welcome-text">Welcome to SIWS</div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <!-- Principal Section -->
        <div class="principal-section">
            <div >
                <img src="images/principal.jpg" >
                 <div class="principal-message">
                <h2>Message from Principal</h2>
                <p>"Vidya Dhanam Sarva Dhanat Pradhanam"</p>
                </div>     
            </div>
        </div>

        <!-- Notice Board -->
        <div class="notice-board">
            <h2>Notice and Announcements</h2>
            <div class="notice-item">
                <a href="pdf/announcement1.pdf"><i class="fas fa-file-pdf"></i> Notice for Orientation of FYBCom. Regular lectures to start from 23rd June 2025.</a>
            </div>
            <div class="notice-item">
                <a href="pdf/announcement2.pdf"><i class="fas fa-file-pdf"></i> Notice for Orientation of FYBAF. Regular lectures to start from 23rd June 2025.</a>
            </div>
            <div class="notice-item">
                <a href="pdf/announcement3.pdf"><i class="fas fa-file-pdf"></i> Mumbai's First Postgraduate Diploma in Digital Marketing (Analytics).</a>
            </div>
            <div class="notice-item">
                <a href="pdf/announcement4.pdf"><i class="fas fa-file-pdf"></i> Implementation of 'Yuva Raksha: Student Life / Accident Insurance Scheme'</a>
            </div>
        </div>

        <!-- Recruiters Section -->
    
        <div class="recruiters-section">
        <h2>Our Esteemed Recruiters</h2>
<div class="slideshow-container">
    <div class="slide-track">
        <img src="images/recruiter1.png" alt="Recruiter 1">
        <img src="images/recruiter2.png" alt="Recruiter 2">
        <img src="images/recruiter3.png" alt="Recruiter 3">
        <img src="images/recruiter4.png" alt="Recruiter 4">
        <img src="images/recruiter5.png" alt="Recruiter 5">
        <img src="images/recruiter6.png" alt="Recruiter 6">
        <img src="images/recruiter7.png" alt="Recruiter 7">
    </div>
</div>
</div>




        <!-- Additional Sections -->
        <div class="additional-sections">
            <div class="section-box">
                <div>
                    <img src="images/event1.jpg" >
                </div>
                <h3>Academic Excellence</h3>
                <a href="bsc_physics.php" class="btn">Find Out What You'll Learn </a>

            </div>
            <div class="section-box">
                <div>
                    <img src="images/event2.jpg" >
                </div>
                <h3>Campus Facilities</h3>
            </div>
            <div class="section-box">
                <div>
                    <img src="images/event3.jpg" >
                </div>
                <h3>Student Achievements</h3>
            </div>
        </div>

        <!-- Social Media -->
        <div class="social-media">
            <h2>Connect With Us</h2>
            <div class="social-icons">
                <a href="https://www.facebook.com/people/SIWS-College/61562514952104/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/siwscollegesofficial/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/siwscollegeofficial/?viewAsMember=true"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.youtube.com/@SIWSCollegesOfficial"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
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