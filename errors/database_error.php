<?php include '../view/header.php'; ?>
<main>
    <div class="errorDB">
        <h1>Database Error</h1>
        <p>Error message: <?php echo htmlspecialchars($error_message); ?></p>
    </div>
</main>
<?php include '../view/footer.php'; ?>