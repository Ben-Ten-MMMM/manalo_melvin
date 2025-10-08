<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $page_title ?? 'Page'; ?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<style>
  /* Global */
  body {
    background: linear-gradient(135deg, #E8F5E9 0%, #D7EFD7 100%);
    font-family: 'Roboto', sans-serif;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 2rem;
  }

  .card-container {
    background: #ffffff;
    border-radius: 16px;
    border: 1px solid #d6e9d6;
    box-shadow: 0 16px 36px rgba(45, 90, 45, 0.15);
    padding: 2.5rem;
    width: 100%;
    max-width: 470px;
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .card-container:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 40px rgba(45, 90, 45, 0.2);
  }

  h2.page-title {
    font-family: 'Poppins', sans-serif;
    color: #2E7D32;
    font-weight: 800;
    text-align: center;
    margin-bottom: 2rem;
  }

  .form-group {
    margin-bottom: 1.5rem;
    position: relative;
  }

  .form-control, .form-select {
    border: 2px solid #E1F0E1;
    border-radius: 10px;
    padding: 12px 15px;
    font-size: 1rem;
    background-color: #F7FBF7;
    transition: all 0.25s ease;
  }

  .form-control:focus, .form-select:focus {
    border-color: #2D5A2D;
    box-shadow: 0 0 0 0.2rem rgba(45, 90, 45, 0.2);
    background-color: #ffffff;
  }

  .btn-primary {
    background-color: #2D5A2D;
    color: #fff;
    border: none;
    border-radius: 10px;
    padding: 12px;
    font-size: 1.1rem;
    font-weight: 600;
    width: 100%;
    box-shadow: 0 6px 16px rgba(45, 90, 45, 0.35);
    transition: all 0.25s ease;
  }

  .btn-primary:hover {
    background-color: #244A24;
    transform: translateY(-2px);
    box-shadow: 0 8px 22px rgba(45, 90, 45, 0.45);
    color: #ffffff;
  }

  .btn-secondary {
    background-color: transparent;
    color: #2E7D32;
    border: 2px solid #2E7D32;
    border-radius: 10px;
    padding: 12px;
    font-weight: 600;
    width: 100%;
    transition: all 0.25s ease;
  }

  .btn-secondary:hover {
    background-color: #2E7D32;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 6px 14px rgba(46, 125, 50, 0.3);
  }

  .alert {
    border-radius: 10px;
    border: 1px solid #d6e9d6;
    margin-bottom: 1rem;
  }

  .text-center a {
    color: #2D5A2D;
    font-weight: 600;
    text-decoration: none;
  }

  .text-center a:hover {
    color: #244A24;
    text-decoration: underline;
  }

  .header-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
  }

  .logout-btn {
    background-color: #C62828;
    color: white;
    border-radius: 8px;
    padding: 8px 16px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .logout-btn:hover {
    background-color: #B71C1C;
    transform: translateY(-1px);
    color: white;
  }
</style>
</head>
<body>

<div class="card-container">
  <?php if (isset($page_title)) echo "<h2 class='page-title'>{$page_title}</h2>"; ?>

  <?php if (isset($_SESSION['error'])): ?>
    <div class="alert alert-danger"><?= html_escape($_SESSION['error']); unset($_SESSION['error']); ?></div>
  <?php endif; ?>
  <?php if (isset($_SESSION['success'])): ?>
    <div class="alert alert-success"><?= html_escape($_SESSION['success']); unset($_SESSION['success']); ?></div>
  <?php endif; ?>

  <?= $form_content ?? ''; ?>

  <?php if (isset($extra_links) && is_array($extra_links)): ?>
    <div class="text-center mt-3">
      <?php foreach ($extra_links as $link_text => $link_url): ?>
        <div><a href="<?= $link_url ?>"><?= $link_text ?></a></div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
