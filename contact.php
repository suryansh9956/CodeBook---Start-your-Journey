<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>codeBook - Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #02023c;
        }

        .contact-container {
            max-width: 600px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.3);
            margin: 50px auto;
            position: relative;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php include 'child/_dbconnect.php'; ?>
    <?php include 'child/_header.php'; ?>
    <div class="container">
        <div class="contact-container">
            <form action="/forums/child/_handlecontact.php" method="post">
                <div>
                    <button class="close-btn" onclick="goHome()">✖</button>
                    <h1 class="text-center" style="color: black;">Contact Us</h1>
                </div>
                <div class="mb-3">
                    <label for="firstname" class="form-label" style="color: black;">Full Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Your Name" required>
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label" style="color: black;">Mobile Number</label>
                    <input type="text" class="form-control" id="number" name="number" placeholder="Mob. No." required>
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label" style="color: black;">Email address</label>
                    <input type="email" class="form-control" id="Email" name="Email" placeholder="abc123@gmail.com" required>
                </div>
                <div class="mb-3">
                    <label for="addr" class="form-label" style="color: black;">Address</label>
                    <input type="text" class="form-control" id="addr" name="addr" placeholder="Your Address" required>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label" style="color: black;">Age</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="Your Age" required>
                </div>
                <div class="mb-3">
                    <label for="problem" class="form-label" style="color: black;">Problem</label>
                    <textarea class="form-control" id="problem" name="problem" rows="3" placeholder="Your Problem" required></textarea>
                </div>
                <button type="submit" class="btn btn-warning w-100">Submit</button>
            </form>
        </div>
    </div>
    <script>
        function goHome() {
            window.location.href = "index.php"; // Home page ka URL daal do
        }
    </script>
    <?php include 'child/_footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>