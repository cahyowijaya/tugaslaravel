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

    <form action="/welcome" method="Post">
    @csrf
        <label for="">First name:</label><br><br>
        <input type="text" name="firstname"><br><br>

        <label for="">Last name:</label><br><br>
        <input type="text" name="lastname"><br><br>

        <label for="gender">Gender:</label><br><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
        <br><br>

        <label for="">Nationality</label><br><br>
        <select name="" id="">
            <option value="indonesian">Indonesian</option>
            <option value="">dll.</option>
        </select>
        <br>
        <br>

        <label for="">Language Spoken:</label><br><br>
        <input type="checkbox" id="bi" name="bi" value="bi">
        <label for="bi">Bahasa Indonesia</label><br>
        <input type="checkbox" id="eg" name="eg" value="eg">
        <label for="eg">English</label><br>
        <input type="checkbox" id="ot" name="gender" value="ot">
        <label for="ot">Other</label>
        <br><br>

        <label for="">Bio:</label><br><br>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        <br>
        
        <button>Sign Up</button>

    </form>

    
    

    
    
    
    
    
    

    
</body>
</html>