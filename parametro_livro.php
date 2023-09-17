<?php
   session_start();
   
   // Array vazia para guardar os livros que serão emprestados
   if (!isset($_SESSION['livros_emprestados'])) {
       $_SESSION['livros_emprestados'] = [];
   }
   
   // Array de professores disponiveis
   $professores = [
       'Professor Orlando',
       'Professor Nilton',
       'Professora Jeane',
   ];
   
   // Função para emprestr o livro
   function emprestarLivro($livro, $professor) {
       $_SESSION['livros_emprestados'][] = [
           'livro' => $livro,
           'professor' => $professor,
       ];
   }
   
   // Listando os livros que foram emprestados
   function listarLivrosEmprestados() {
       if (empty($_SESSION['livros_emprestados'])) {
           echo "Nenhum livro foi emprestado";
       } else {
           echo "<h2>Livros emprestados:</h2>";
           echo "<ul>";
           foreach ($_SESSION['livros_emprestados'] as $emprestimo) {
               echo "<li>Livro: {$emprestimo['livro']}, Professor: {$emprestimo['professor']}</li>";
           }
           echo "</ul>";
       }
   }
   ?>