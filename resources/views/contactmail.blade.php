<!DOCTYPE html>
<html>
 <head>
  <title>Mail</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <!-- Styles -->
  <style>
      html, body {
          background-color: #fff;
          color: #636b6f;
          font-family: 'Nunito', sans-serif;
          font-weight: 200;
          height: 100vh;
          margin: 0;
      }
      .content { text-align: center; }
      .title { font-size: 84px; }
  </style>
 </head>
 <body>
  <br />
  <div class="container box" style="width: 970px;">
   <h1 style="text-align:center;">The User: {{ $data['fullname'] }} Submitted a Contact Comment</h1>
   <h3 align="center">The Message is: {{ $data['message'] }}</h3>
  </div>
 </body>
</html>