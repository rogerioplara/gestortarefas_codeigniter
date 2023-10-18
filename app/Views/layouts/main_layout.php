<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?></title>

    <!-- importação dos recursos dos assets para toda a aplicação -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css')?>">
    
    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css')?>">
</head>
<body>
    
    <!-- renderização de seção -->
    <?= $this->renderSection('content') ?>

    <!-- Bootstrap JS -->
    <script src="<?= base_url('assets/bootstrap/bundle.min.js')?>"></script>

</body>
</html>