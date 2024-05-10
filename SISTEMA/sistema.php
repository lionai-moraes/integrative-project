
<?php
   session_start();
   include_once('config.php');
//    print_r($_SESSION);
   if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
   {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: login.php');
   }
   $logado = $_SESSION['email'];
   if(!empty($_GET['search']))
   {
    $data = $_GET['search'];
    $sql = "SELECT * FROM adm WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";

   }
   else
   {
    $sql = "SELECT * FROM adm ORDER BY id DESC";
   }
   $result = $conexao->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <title>Sistema</title>
    <style>
        body{
            background: linear-gradient(to right, rgb(139, 141, 135), rgb(54, 54, 54));
            color: #fff;
            text-align: center;
        }
        .navbar {
             background-color: #e3f2fd;
         }
        .table-bg{
            background: rgba(0,0,0,0.3);
            border-radius: 15px 15px 0 0;
        }
        .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
        }
       
         @media (min-width: 768px) {
             .box-search {
                 width: 50%;
             }
         }
         .m-5 {
             overflow-x: auto;
         }
    </style>
     <title>Sistema</title>
    
</head>
<body>
<nav class="navbar navbar-light style="style= "background-color: rgb(54, 54, 54);">
  <a class="navbar-brand" href="#" style="color:#fff ;">
    <img src="../images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    SISTEMA MANAGEMENT
  </a>
  <div class="d-flex">
    <a href="home.php" class="btn btn-danger me-5">Sair</a>
  </div>
</nav>
<br>
<?php
    echo "<h1>Seu portal administrativo <u>$logado</u></h1>";
    ?>
    <br>
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
              </svg>
        </button>
    </div>
    <div class="m-5">
     <table class="table text-white table-bg">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Senha</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Endeceço</th>
                <th scope="col">Edição</th>
            </tr>
        </thead>
        <tbody>
            <?php

                while($user_data = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>" .$user_data['id']."</td>";
                    echo "<td>" .$user_data['nome']."</td>";
                    echo "<td>" .$user_data['senha']."</td>";
                    echo "<td>" .$user_data['email']."</td>";
                    echo "<td>" .$user_data['telefone']."</td>";
                    echo "<td>" .$user_data['cidade']."</td>";
                    echo "<td>" .$user_data['estado']."</td>";
                    echo "<td>" .$user_data['endereco']."</td>";
                    echo "<td>
                         <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]'>
                          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                           <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                          </svg>
                         </a>
                    </td>";
                    echo "</td>";
                }

            ?>
        </tbody>
     </table>
    </div>
</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'sistema.php?search='+search.value;
    }
</script>
</html>
