<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= BASEURL; ?>/img/logo.png">
    <title>Halaman <?= $data['judul']; ?></title>

    <!-- Bootstrap CSS (dari CDN atau lokal) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- External Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" />

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom CSS (hanya dimuat jika ada) -->
    <?php if (isset($data['css'])): ?>
        <?php if (is_array($data['css'])): ?>
            <?php foreach ($data['css'] as $cssFile): ?>
                <link rel="stylesheet" href="<?= BASEURL; ?>/css/<?= $cssFile; ?>">
            <?php endforeach; ?>
        <?php else: ?>
            <link rel="stylesheet" href="<?= BASEURL; ?>/css/<?= $data['css']; ?>">
        <?php endif; ?>
    <?php endif; ?>

    <script>
    const BASEURL = "<?= BASEURL; ?>";
    </script>

</head>
<body>
