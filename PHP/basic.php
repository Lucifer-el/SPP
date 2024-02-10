<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="ketengah.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="flex align-items: center ">
        <h1 style="font-family: 'Rubik', sans-serif;">Buat Account Baru</h1>
    </div>
    <div class="flex align-items: center ">
        <h4 style="font-family: 'Rubik', sans-serif;">Sign Up Form</h4>
    </div> <br>
    <div class="flex align-items: center ">
        <form action="Welcome.php" method="post">
            <div class="flex">
                <p>First Name :</p>
                <input type="text" placeholder="Type here" name="firstName"
                    class="firstName input input-bordered input-error w-full max-w-xs" require />
            </div> <br>
            <div class="flex align-items:center">
                <p>Last Name</p>
                <input type="text" placeholder="Type here" name="lastName"
                    class=" lastName input input-bordered input-error w-full max-w-xs" require />
            </div>
            <p>Gender</p>
                <input type="radio" name="Gender" value="Male" />
                <b>Male</b><br>
                <input type="radio" name="Gender"value="Female" /><b>Female</b>
                <p>Nationality</p>
                <select name="Negara">
                    <Option value="indonesia">Indonesia</Option>
                    <Option value="Germany">Germany</Option>
                    <Option value="Japanese">Japanese</Option>
                    <Option value="Vietnamese">Vietnamese</Option>
                </select>
                <p>Language Spoken</p>
                <input type="checkbox" name="Bahasa[]" value="Bahasa indonesia">Bahasa Indonesia<br>
                <input type="checkbox" name="Bahasa[]" value="Bahasa English">English<br>
                <input type="checkbox" name="Bahasa[]" value="Bahasa asing">Other<br>
                <p>Bio</p>
                <textarea cols="30" rows="10" name="Bio" required></textarea>
                <a href="welcome.php"><br><button>Sign Up</button>
        </form>
    </div>

    <?php

    ?>
</body>

</html>