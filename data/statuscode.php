<?php
  $file = 'status_data.json';
  if (file_exists($file)) {
    header("Cache-Control:max-age=86400");
    readfile($file);
    exit;
  }
  exit("Failed to read file.");
