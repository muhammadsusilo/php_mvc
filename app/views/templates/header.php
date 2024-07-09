

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
        <?php
        if (isset($data['judul'])) {
          echo $data['judul'];
        } else {
          echo 'Judul tidak ditemukan';
        }
        ?>

</title>
</head>

<body></body>