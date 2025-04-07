<?php

function e(string $value): void
{
  echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function render(string $view, array $data = []): void
{
  extract($data);
  ob_start();
  require_once __DIR__ . '/../views/pages/' . $view . '.view.php';
  $content = ob_get_clean();
  require_once __DIR__ . '/../views/layouts/main.view.php';
}
