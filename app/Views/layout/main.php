<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>

    <!-- CSS untuk Header -->
    <?= $this->include('layout/header_css') ?>

    <!-- CSS untuk Footer -->
    <?= $this->include('layout/footer_css') ?>
</head>

<body>
    <!-- HEADER -->
    <?= $this->include('layout/header') ?>

    <!-- MAIN CONTENT -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <!-- FOOTER -->
    <?= $this->include('layout/footer') ?>
</body>
</html>
