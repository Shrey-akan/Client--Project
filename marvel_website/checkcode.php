<!DOCTYPE html>
<html>
<head>
  <title>Wavy Shape at Top of Container</title>
  <style>
    .container {
      width: 400px;
      height: 200px;
      position: relative;
      background-color: #f2f2f2;
      overflow: hidden;
    }

    .container::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100px;
      background-color: #f2f2f2;
      transform: skewY(-10deg);
      transform-origin: 0% 100%;
    }
  </style>
</head>
<body>
  <div class="container"></div>
</body>
</html>
