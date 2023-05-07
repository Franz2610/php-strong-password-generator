<?php
include './partial/template/header.php';
include './partial/function/function.php'
?>

<main class="bg-success text-white text-center justify-content-center align-items-center">
    <?php if (!empty($_GET['number'])) { ?>
        <h1>Password generata</h1>
        <h3>La password generata per te è: </h3>
        <h2 class="text-black"><?php echo $password ?></h2> 
    <?php }  ?>
</main>

<?php include './partial/template/footer.php'; ?>