<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    if ($_POST["username"] == "fatec" and $_POST["password"] == "araras") {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = "fatec";
        header("location: livros.php");
    } else {
        $_SESSION["loggedin"] = false;
        echo "Senha invalida";
    }
}?>


<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Biblioteca Fatec Araras</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <!-- Style do site -->
      <style type="text/css">
         body{ font: 14px sans-serif; background-color: #B20000;}
         .saudacoes{ padding: 10px; color: #ffff;}
         .btn-primary{background-color: #083391;}
      </style>
   </head>
   <body>
      <div class="saudacoes" style="text-align: center;">
         <h3>Seja bem vindo à Biblioteca Virtual da FATEC Araras</h3>
         <p>Para alugar os livros, é necessário realizar o login</p>
      </div>
      <!-- Definindo a Section do Form -->
      <section class="vh-100">
         <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
               <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card shadow-2-strong" style="border-radius: 2rem;">
                     <div class="card-body p-5 text-center">
                        <!-- FORMULÁRIO METHOD POST -->
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                           <h3 class="mb-5">Acessar</h3>
                           <div class="form-outline mb-4">
                              <label class="form-label">Usuário</label>
                              <input type="text" name="username" class="form-control form-control-lg" value="fatec" />      
                              <span class="help-block"></span>
                           </div>
                           <div class="form-outline mb-4">
                              <label class="form-label">Senha</label>
                              <input type="password" name="password" class="form-control form-control-lg" value="araras" />      
                              <span class="help-block"></span>
                           </div>
                           <div class="form-group">
                              <input type="submit" class="btn btn-primary" value="Acessar">
                           </div>
                        </form>
                     </div>
                  </div>
                  <a class="btn btn-primary" href="/FATEC_DES_WEB_2_2023_Avaliacao1/" role="button">Voltar</a>
               </div>
            </div>
         </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>