<?php
session_start();

session_unset();
session_destroy();
unset($_SESSION["login"]);
unset($_SESSION["name"]);
$_SESSION = [];

$response = "Anda telah berhasil logout dari situs";
?>

<!DOCTYPE html>
<html>
<!-- Favicon -->
<link rel="icon" href="../img/favicon.ico">

<head>
    <style>
        body {
            background-color: #eee;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .loading-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        .loading-icon {
            width: 50px;
            height: 50px;
            border: 4px solid rgba(0, 0, 0, 0.1);
            border-left-color: #007bff;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        .loading-text {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="loading-container">
        <div class="loading-icon"></div>
        <br>
        <div class="loading-text">
            <?php echo $response; ?><br><br>
        </div>
    </div>

    <script>
        // Redirect setelah 1 detik
        setTimeout(function () {
            window.location.href = '../admin/beasiswa.php';
        }, 1000);
    </script>
</body>

</html>