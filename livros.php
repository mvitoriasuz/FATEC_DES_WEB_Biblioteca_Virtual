<?php
    include_once("parametro_livro.php");
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Empréstimo de Livros - Fatec Araras</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <!-- Style do site -->
      <style type="text/css">
         body{ font: 14px sans-serif; background-color: #ffff;}
         .aluguel_livros{ padding: 3px; padding: 1,5rem;}
         .btn-primary{background-color: #083391;}
      </style>
    </head>
   <body>
   <div class="aluguel_livros" style="text-align: center;">
         <h3>Seja bem vindo à Biblioteca Virtual da FATEC Araras</h3>
         <p>Para alugar os livros é necessário incluir o nome do livro e o Professor Responsável</p>
      </div>
    <section class="vh-100">
         <!-- <div class="container py-9 h-100"> -->
            <div class="row d-flex justify-content-center align-items-center h-100">
               <div class="col-12 col-md8 col-lg-6 col-xl-5">
                  <div class="card shadow-2-strong" style="border-radius: 0,5em;">
                     <div class="card-body text-center">
                        <!-- Iniciando o Formulário e Declarando o methodo POST -->
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                           <div class="form-outline mb-4">
                              <label for="livro" class="form-label">Livro</label>
                              <input type="text" name="livro" class="form-control form-control-lg"/>      
                              <span class="help-block"></span>
                           </div>
                           <div class="form-floating">
                            <select class="form-select" name="professor" aria-label="Floating label select example">
                                <?php
                                    foreach ($professores as $professor) {
                                        echo "<option value=\"$professor\">$professor</option>";}?>
                            </select>
                                <br>
                                <?php
                                    if (isset($_POST['emprestar'])) {
                                        $livro = $_POST['livro'];
                                        $professor = $_POST['professor'];
                                        emprestarLivro($livro, $professor);
                                        echo "<p>Empréstimo realizado com sucesso!</p>";
                                    }?>
                            <input type="submit" class="btn btn-primary" name="emprestar" value="Alugar">
                            <a class="btn btn-primary" href="logout.php" role="button">Encerrar Sessão</a>

                        </form>
                     </div>
                  </div>
               </div>
            </div>
         <!-- </div> -->
      </section>
      <?php
         listarLivrosEmprestados();
         ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   </body>
</html>