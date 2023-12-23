<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Konsep Modularisasi</title>
  <link rel="stylesheet" href="../template/style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background: linear-gradient(to right, rgb(241, 163, 253), rgb(168, 225, 255));
      color: white;
      text-align: center;
      padding: 1em;
    }

    .main-navigation {
      background-color: #f0f0f0;
      overflow: hidden;
    }

    .main-navigation a {
      float: left;
      display: block;
      color: #333;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .main-navigation a:hover {
      background-color: #ddd;
      color: black;
    }
  </style>
</head>

<body>
  <header>
    <h1>Implementasi dengan Modularisasi</h1>
  </header>
  <div class="main-navigation">
    <a href="module/mobil.php">Home</a>
    <a href="module/about.php">About</a>
    <a href="module/artikel/form_input.php">Form</a>
    <a href="module/contact.php">Contact</a>
    <a href="module/data.php">Data Form</a>
  </div>
</body>

</html>
