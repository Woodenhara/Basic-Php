<!DOCTYPE html>
<html lang="en" data-theme="garden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Php Form</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="w-full items-center flex m-auto h-screen">
    <main class="max-w-screen-xl items-center flex m-auto">
        <div class="card w-96 bg-neutral shadow-xl text-neutral-content">
            <div class="card-body">

                <?php
        $first = $_POST["first"];
        $last = $_POST["last"];
        $gender = $_POST["gender"] ?? "Tidak teridentifikasi";
        $country = $_POST["country"] ?? "Tidak teridentifikasi";
        $language = $_POST["language"] ?? "Tidak teridentifikasi";
        $bio = $_POST["bio"];

    echo "<h1 class='text-lg font-bold text-center'>Selamat datang, $first $last! </h1>";
    echo "<br>";
    echo "Nama depan: $first";
    echo "<br>";
    echo "Nama belakang: $last";
    echo "<br>";
    echo "Jenis kelamin: $gender";
    echo "<br>";
    echo "Kewarganegaraan: $country";
    echo "<br>";
    echo "Bahasa yang dikuasai: " . (is_array($language) ? implode(", ", $language) : $language);
    echo "<br>";
    echo "Bio: $bio";
    ?>
            </div>
        </div>
    </main>
</body>

</html>