<?
$code = $_GET['code'];

if ($code == "") {
    $code = "z85l191anv7MHGiUlgwB+KsUnaxN1q3XntWki6+ht7gai86AiBi1fFWONKs0YK5Dzq5wK06NzjHw0mpSu2MAM7y7WfngfI7MpuG14RBu0FQF/J3PaUod+ZuHcNkKz248U5q8KIXXV4wfrJbQgk5rFFSnlZLURfosjt4+kNPTN8+g8z9Q0X/eF12EsjjKrozMC12vVhCwSp1/4S6YB3CSnkSiOooatXkwh51DcIwn5uRfyKxhbWZz/fTCqEETEJ6+zT7srfeTNJU616/EfsBW3LfJu6+0zPVxZWG6dQoMzIxKyZdHqU/9eXOhAetqaHh5Sb3ecg4xgWMVk9GaEc/KxQv01LecxSENnL/kEmYwW3LMezN7EJ6EKFt8dGqp8LYVmyHtPCF9L0myeMURwlXB/S/HYpzXTcg1fhMhEE82SV8eZnzi/dICMaOGgDfQwvv/BvfgIZj7o+E9ftOQUAZCmoncNEUJk4Q1hHUP8Q07jmwRiStRn0azsgDViJFg/GioIqieo64KoeFIgwK5XLJY2uVbTiLbllB/Iw==";
}

?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prueba BKA</title>
  <style>
    html, body {
      margin: 0;
      height: 100%;
      background-color: #FFFFFF;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
    }

    .boton {
      background-color: #01A4A9;
      color: #FFFFFF;
      border: none;
      border-radius: 8px;
      padding: 14px 32px;
      font-size: 18px;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.2s ease, transform 0.1s ease;
    }

    .boton:hover {
      background-color: #018A8E;
    }

    .boton:active {
      transform: scale(0.97);
    }

    .boton:focus-visible {
      outline: 3px solid #7FD3D5;
      outline-offset: 3px;
    }
  </style>
</head>
<body>
  <button class="boton" type="button" onclick="window.location.href='tokenbankaool://activar?cadena=<?=$code?>'">Abrir en app Token</button>
</body>
</html>
