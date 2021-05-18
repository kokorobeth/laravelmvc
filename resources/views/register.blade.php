<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas HTML Sanbercode</title>
</head>
<body>
    <form action="/Welcome" method="POST">
    @csrf
        <h2>Buat Account Baru!</h2>
        <h4>Sign Up Form</h4>
        <p>First Name : </p>
        <input type="text" name="first_name">
        <p>Last Name : </p>
        <input type="text" name="last_name">
        <p>Gender</p>
        <input type="radio" value="M" name="gender">Male <br>
        <input type="radio" value="F" name="gender">Female <br>
        <input type="radio" value="O" name="gender">Other <br>

        <p>Nationality</p>
        <select name="nationality" id="">
            <option value="indo">Indonesia</option>
            <option value="malay">Malaysia</option>
            <option value="India">India</option>
            <option value="japan">Japan</option>
        </select>
        <br>
        <p>Language Spoken</p>
        <input type="checkbox" name="language" value="indo">Bahasa Indonesia <br> 
        <input type="checkbox" name="language" value="english">English <br>
        <input type="checkbox" name="language" value="other">Other <br>

        <p>Bio</p>
        <textarea name="bio" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="sign up">
    </form>
</body>
</html>