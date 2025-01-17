<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= BASEURL; ?>/img/logo.png">
    <title>Halaman <?= $data['judul']; ?></title>

    <?php if (isset($data['minimal_header']) && $data['minimal_header']): ?>
        <!-- Opsi 1: Memuat Default CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php else: ?>
        <!-- Opsi 2: Memuat Hanya CSS Tertentu -->
        <link rel="stylesheet" href="<?= BASEURL; ?>/vendors/feather/feather.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/vertical-layout-light/style.css">
        <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/js/select.dataTables.min.css">
    <?php endif; ?>

    <!-- Custom CSS -->
    <?php if (isset($data['css'])): ?>
        <?php foreach ((array) $data['css'] as $cssFile): ?>
            <link rel="stylesheet" href="<?= BASEURL; ?>/css/<?= $cssFile; ?>">
        <?php endforeach; ?>
    <?php endif; ?>

    <script>
        const BASEURL = "<?= BASEURL; ?>";
    </script>
</head>
<body>
