<?php
// Include necessary PHP code
?>
<!-- Spinner Start -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Spinning Loader</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #ffffff, #e2deff);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .loader {
            width: 100px;
            height: 100px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotateY(0deg) rotateX(0deg);
            }
            100% {
                transform: rotateY(360deg) rotateX(360deg);
            }
        }

        .loading-text {
            font-size: 1.2em;
            color: #333;
            margin-top: 20px;
        }

        .content {
            display: none;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Loading Screen -->
    <div class="loading-screen">
        <img src="img/logo HMS.png" alt="Loading" class="loader">
        <p class="loading-text">Loading...</p>
    </div>

    <!-- Real Content -->
    <div class="content">
        <h1>Welcome to the Main Page!</h1>
        <p>This is the content that appears after the loader finishes.</p>
    </div>

    <script>
        window.onload = function() {
            // Simulate loading time if needed (e.g., for server processing)
            setTimeout(() => {
                document.querySelector('.loading-screen').style.display = 'none';
                document.querySelector('.content').style.display = 'block';
            }, 1000); // Adjust delay time here (in milliseconds)
        };
    </script>

</body>
</html>
<!-- Spinner End -->
