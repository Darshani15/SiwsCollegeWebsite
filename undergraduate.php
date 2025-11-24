<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Academics | SIWS College</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
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

        .academics-nav {
            background-color: #1a237e;
            padding: 10px 0;
            margin-bottom: 10px;
        }

        .academics-nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 40px;
            margin: 0;
            padding: 0;
        }

        .academics-nav ul li a {
            color: white;
            font-weight: 600;
            text-decoration: none;
            padding: 8px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .academics-nav ul li a:hover,
        .academics-nav ul li a.active {
            background-color: #3949ab;
        }

        .top-banner {
            position: relative;
            width: 100%;
            max-height: 450px;
            overflow: hidden;
            margin-bottom: 40px;
        }

        .top-banner img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }

        .banner-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 2.8rem;
            font-weight: bold;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
            text-align: center;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 0 20px 40px 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .program-category h3 {
            color: #3949ab;
            margin-bottom: 15px;
        }

        .programs {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
        }

        .program-card {
            background-color: #e8eaf6;
            padding: 15px 20px;
            border-radius: 6px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        .program-card:hover {
            background-color: #c5cae9;
        }

        .program-card h4 {
            margin: 0 0 8px 0;
            font-size: 1.1rem;
            color: #1a237e;
        }

        .program-card p {
            margin: 0 0 12px 0;
            font-size: 0.95rem;
            color: #333;
        }

        .learn-btn {
            display: inline-block;
            background-color: #ff9800;
            color: white;
            padding: 8px 14px;
            border: none;
            border-radius: 4px;
            font-size: 0.9rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .learn-btn:hover {
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
        <h1>SIWS College - Academics</h1>
    </header>

    <nav class="academics-nav">
        <ul>
            <li><a href="undergraduate.php" class="active">Undergraduate Program</a></li>
            <li><a href="postgraduate.php">Postgraduate Program</a></li>
            <li><a href="doctoral.php">Doctoral Program</a></li>
        </ul>
    </nav>

    <div class="top-banner">
        <img src="images/undergraduate.jpg" alt="Undergraduate Program" />
        <div class="banner-text">Undergraduate Program</div>
    </div>

    <div class="container">
        <h2>Our Academic Programs - Undergraduate</h2>

        <div class="program-category">
            <h3>Undergraduate Programs</h3>
            <div class="programs">
                <div class="program-card">
                    <h4>B.Sc. (Physics)</h4>
                    <p>Duration: <strong>3 years</strong></p>
                    <button class="learn-btn" onclick="window.location.href='bsc_physics.php'">Find Out What You'll Learn</button>
                </div>
                <div class="program-card">
                    <h4>B.Sc. (Chemistry)</h4>
                    <p>Duration: <strong>3 years</strong></p>
                    <button class="learn-btn" onclick="window.location.href='bsc_chemistry.php'">Find Out What You'll Learn</button>
                </div>
                <div class="program-card">
                    <h4>B.Sc. (Microbiology)</h4>
                    <p>Duration: <strong>3 years</strong></p>
                    <button class="learn-btn" onclick="window.location.href='bsc_microbiology.php'">Find Out What You'll Learn</button>
                </div>
                <div class="program-card">
                    <h4>B.Com. (Accountancy)</h4>
                    <p>Duration: <strong>3 years</strong></p>
                    <button class="learn-btn" onclick="window.location.href='bcom_accountancy.php'">Find Out What You'll Learn</button>
                </div>
                <div class="program-card">
                    <h4>B.Com. (Commerce)</h4>
                    <p>Duration: <strong>3 years</strong></p>
                    <button class="learn-btn" onclick="window.location.href='bcom_commerce.php'">Find Out What You'll Learn</button>
                </div>
                <div class="program-card">
                    <h4>B.M.S. (AICTE)</h4>
                    <p>Duration: <strong>3 years</strong></p>
                    <button class="learn-btn" onclick="window.location.href='bms.php'">Find Out What You'll Learn</button>
                </div>
                <div class="program-card">
                    <h4>B.Com. (Management Studies)</h4>
                    <p>Duration: <strong>3 years</strong></p>
                    <button class="learn-btn" onclick="window.location.href='bcom_managementstudies.php'">Find Out What You'll Learn</button>
                </div>
                <div class="program-card">
                    <h4>B.Com. (Banking & Insurance)</h4>
                    <p>Duration: <strong>3 years</strong></p>
                    <button class="learn-btn" onclick="window.location.href='bcom_banking and insurance.php'">Find Out What You'll Learn</button>
                </div>
                <div class="program-card">
                    <h4>B.Com. (Accounting & Finance)</h4>
                    <p>Duration: <strong>3 years</strong></p>
                    <button class="learn-btn" onclick="window.location.href='bcom_accounting and finance.php'">Find Out What You'll Learn</button>
                </div>
                <div class="program-card">
                    <h4>B.Com. (Financial Markets)</h4>
                    <p>Duration: <strong>3 years</strong></p>
                    <button class="learn-btn" onclick="window.location.href='bcom_financial markets.php'">Find Out What You'll Learn</button>
                </div>
                <div class="program-card">
                    <h4>B.Com. (Financial Management)</h4>
                    <p>Duration: <strong>3 years</strong></p>
                    <button class="learn-btn" onclick="window.location.href='bcom_financial management.php'">Find Out What You'll Learn</button>
                </div>
                <div class="program-card">
                    <h4>B.Sc. (Information Technology)</h4>
                    <p>Duration: <strong>3 years</strong></p>
                    <button class="learn-btn" onclick="window.location.href='bsc_information technology.php'">Find Out What You'll Learn</button>
                </div>
                <div class="program-card">
                    <h4>B.Sc. (Computer Science)</h4>
                    <p>Duration: <strong>3 years</strong></p>
                    <button class="learn-btn" onclick="window.location.href='bsc_computer science.php'">Find Out What You'll Learn</button>
                </div>
                <div class="program-card">
                    <h4>B.Sc. (Data Science)</h4>
                    <p>Duration: <strong>3 years</strong></p>
                    <button class="learn-btn" onclick="window.location.href='bsc_data science.php'">Find Out What You'll Learn</button>
                </div>
                <div class="program-card">
                    <h4>B.Sc. (Artificial Intelligence)</h4>
                    <p>Duration: <strong>3 years</strong></p>
                    <button class="learn-btn" onclick="window.location.href='bsc_artificial intelligence.php'">Find Out What You'll Learn</button>
                </div>
            </div>
        </div>
    </div>





    <footer>
        <div class="footer-content">
            <p>SIWS N.R. Swamy College of Commerce & Economics and Smt. Thirumalai College of Science (Autonomous)</p>
            <p>Wadala, Mumbai 400031 | Phone: +91-22-24143335 | Email: info@siwscollege.edu.in</p>
            <p>© 2023 SIWS College. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
