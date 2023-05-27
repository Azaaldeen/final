
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>UPDATE INFORMATION</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.html">Azaldeen eed</a></p>
        </div>

        <div class="Rl">
            <a href="#">UPDATE INFORMATION</a>
        </div>
    </div>
    <div class="container">
        <div class="box form-box">
         
            <header>UPDATE INFORMATION</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Name</label>
                    <input type="text" name="username" id="username" value="" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">passowrd</label>
                    <input type="passowrd" name="passowrd" id="passowrd" value="" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">role</label>
                    <input type="text" name="role" id="role" value="" autocomplete="off" required>
                </div>
                
                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Update" required>
                </div>
                
            </form>
        </div>
      
      </div>
      <style>
        .nav{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    line-height: 60px;
    z-index: 100;
}
.logo{
    font-size: 25px;
    font-weight: 900;
    
}
.logo a{
    text-decoration: none;
    color: #b91616;
}
.Rl{background-color: brown;
        color: rgb(0, 0, 0);
        text-decoration: none;
        font-weight: bold;
        border: 2px solid transparent;
    padding: 0.8rem 1.87rem;
    border-radius:  30px;
      }
      .Rl:hover{
        background-color: transparent;
border: 2px solid brown; 
transition: 0.4s;}
.form-box header{
    font-size: 25px;
    font-weight: 600;
    padding-bottom: 10px;
    margin-bottom: 10px;
    body{
    background: #ffffff;
}
}

      </style>
</body>
</html>