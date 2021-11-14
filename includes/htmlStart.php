<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="./styles/style.css">
     <link rel="stylesheet" href="../styles/style.css">
     <link rel="stylesheet" href="../../styles/style.css">


     <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
     <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet"/>
     <script src="https://unpkg.com/feather-icons"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  

    <title>נדל"ן להשכרה</title>
    <link rel="icon" href="data:image/jpeg;base64,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" type="image/icon type">
</head>
<body>


    
   