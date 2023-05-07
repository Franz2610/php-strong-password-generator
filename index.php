<?php
include './partial/function/function.php';
?>

<?php include './partial/template/header.php' ?>
<main class="bg-success text-white text-start justify-content-center align-items-center">
    <h1 class="text-upperrcase mb-1 ">Generatore di password</h1>
    <form class="m-2" action="myPass.php" method="GET">
            <label class="form-label m-5">Vuoi una password sicura? Generala!</label>
            <input type="number" name="number" id="number" class="form-control w-25 justify-content-center align-items-center m-2" placeholder="Inserisci il numero di caratteri della password" aria-label="number">
            <button type="submit" class="btn btn-warning m-2" href="./myPass.php">Genera password</button>
    </form>
</main>

<?php  include './partial/template/footer.php' ?>