<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entrar/Registrar - PETSHOP</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="form.css">
</head>

<body>
  <div class="container" id="signup" style="display:none;">
    <h1 class="form-title">Registrar</h1>
    <form method="post" action="register.php">
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="fName" id="fName" placeholder="First Name" required>
        <label for="fname">Nome</label>
      </div>
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="lName" id="lName" placeholder="Last Name" required>
        <label for="lName">Sobrenome</label>
      </div>
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email">Email</label>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <label for="password">Senha</label>
      </div>
      <input type="submit" class="btn" value="Registrar" name="signUp">
    </form>
    <p class="or">
      ----------ou--------
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
      <p>Já possui uma conta ?</p>
      <button id="signInButton">Entrar</button>
    </div>
  </div>

  <div class="container" id="signIn">
    <h1 class="form-title">Entrar</h1>
    <form method="post" action="register.php">
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email">Email</label>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <label for="password">Senha</label>
      </div>
      <p class="recover">
        <a href="#">Esqueceu a senha</a>
      </p>
      <input type="submit" class="btn" value="Entrar" name="signIn">
    </form>
    <p class="or">
      ----------ou--------
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
      <p>Não possí uma conta ainda?</p>
      <button id="signUpButton">Registrar</button>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>