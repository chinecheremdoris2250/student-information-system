

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    #scroll-container {
      width: 100%;
      height: 10vh; /* Adjust the height as per your requirement */
      padding: 10px; /* Decreased the padding for better visibility on small screens */
      overflow: hidden;
    }

    #scroll-text {
      text-align: center; /* Center the text on small screens */
      overflow: hidden;
      font-size: 35px; /* Decreased the font size for better visibility on small screens */
      font-weight: 700;
      white-space: nowrap; /* Prevent line breaks in the text */
      animation: my-animation 15s linear infinite;
    }

    @keyframes my-animation {
      0% {
        transform: translateX(100%);
      }

      100% {
        transform: translateX(-100%);
      }
    }
  </style>
</head>

<body>
  <div id="scroll-container">
    <h2 id="scroll-text" style="color: #3f0097;">STUDENT <span style="color: #5500cb;">INFORMATION TRACKING</span>   SYSTEM</h2>
  </div>
</body>

</html>
