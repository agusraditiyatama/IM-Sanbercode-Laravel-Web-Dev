<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>

    <form action="/welcome" method="POST" >
        @csrf 
        <label>First nama:</label>
        <br><br>
        <input type="text" name="first_name">
        <br><br>
        <label>Last name:</label>
        <br><br>
        <input type="text" name="last_name">
        <br><br>
        <label>Gender:</label>
        <br><br>
        <input type="radio" name="gender" value="1"> Male
        <br>
        <input type="radio" name="gender" value="2"> Female
        <br>
        <input type="radio" name="gender" value="3"> Other
        <br><br>
        <label>Nationality:</label>
        <br><br>
        <select name="nasionality">
            <option value="1">Indonesian</option>
            <option value="2">Malaysian</option>
            <option value="3">Singaporean</option>
        </select>
        <br><br>
        <label>Language Spoken:</label>
        <br><br>
        <input type="checkbox" name="language" value="1"> Bahasa Indonesia
        <br>
        <input type="checkbox" name="language" value="2"> English
        <br>
        <input type="checkbox" name="language" value="3"> Other
        <br><br>
        <label>Bin:</label>
        <br><br>
        <textarea cols="20" rows="5" name="pin"></textarea>
        <br><br>
        <input type="submit" value="kirim">
    </form>
</body>
</html>