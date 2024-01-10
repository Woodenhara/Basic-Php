<!DOCTYPE html>
<html lang="en" data-theme="garden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Php Form</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="w-full items-center flex m-auto">
    <main class="max-w-screen-xl items-center flex m-auto">
        <form action="welcome.php" method="post">
            <h2 class="text-4xl font-bold">Basic Php Form</h2><br>

            <!-- Full Name -->
            <h1 class="text-lg font-bold">First name:</h1>
            <input type="text" placeholder="Type here" id="first" name="first"
                class="input input-bordered input-accent w-full max-w-xs" required>
            <br>
            <h1 class="text-lg font-bold">Last name:</h1>
            <input type="text" placeholder="Type here" id="last" name="last"
                class="input input-bordered input-accent w-full max-w-xs" required>
            <br><br>

            <!-- Gender -->
            <h1 class="text-lg font-bold">Gender:</h1>
            <div class="form-control">
                <label class="label cursor-pointer justify-start gap-x-2">
                    <input type="radio" name="gender" class="radio checked:bg-blue-500" value="Male">
                    <span class="label-text">Male</span>
                </label>
            </div>
            <div class="form-control">
                <label class="label cursor-pointer justify-start gap-x-2">
                    <input type="radio" name="gender" class="radio checked:bg-red-500" value="Female">
                    <span class="label-text">Female</span>
                </label>
            </div>
            <div class="form-control">
                <label class="label cursor-pointer justify-start gap-x-2">
                    <input type="radio" name="gender" class="radio checked:bg-green-500" value="Jawa">
                    <span class="label-text">Jawa</span>
                </label>
            </div>
            <br>

            <!-- Nationality -->
            <h1 class="text-lg font-bold">Nationality:</h1>
            <select class="select select-bordered w-full max-w-xs" name="country" id="country">
                <option disabled selected value="Select">Select country</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Japanese">Japanese</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="France">France</option>
                <option value="Bojong">Bojong</option>
            </select>
            <br>

            <!-- Language Spoken -->
            <div class="mt-2 max-w-xs">
                <h1 class="text-lg font-bold">Language Spoken:</h1>
                <div class="form-control">
                    <label class="label cursor-pointer justify-start gap-x-2">
                        <input type="checkbox" class="checkbox" name="language[]" value="Bahasa Indonesia">
                        <span class="label-text">Bahasa Indonesia</span>
                    </label>
                    <label class="label cursor-pointer justify-start gap-x-2">
                        <input type="checkbox" class="checkbox" name="language[]" value="English">
                        <span class="label-text">English</span>
                    </label>
                    <label class="label cursor-pointer justify-start gap-x-2">
                        <input type="checkbox" class="checkbox" name="language[]" value="Sundanese">
                        <span class="label-text">Sundanese</span>
                    </label>
                    <label class="label cursor-pointer justify-start gap-x-2">
                        <input type="checkbox" class="checkbox" name="language[]" value="Javanese">
                        <span class="label-text">Javanese</span>
                    </label>
                    <label class="label cursor-pointer justify-start gap-x-2">
                        <input type="checkbox" class="checkbox" name="language[]" value="Other">
                        <span class="label-text">Other</span>
                    </label>
                </div>
            </div>

            <!-- Bio -->
            <div class="w-full mt-2">
                <label class="form-control">
                    <div class="label">
                        <h1 class="text-lg font-bold">Bio:</h1>
                    </div>
                    <textarea class="textarea textarea-bordered textarea-sm" placeholder="Type here" name="bio"
                        required></textarea>
                    <br>
                    <button class="btn btn-active" type="submit">Submit</button>
                </label>
            </div>
        </form>
    </main>
</body>

</html>