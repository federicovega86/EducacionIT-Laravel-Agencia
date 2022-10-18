<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <header class="bg-dark py-5">

    </header>
    <main class="container py-3">
        <h1>Soy una vista</h1>
        <span>{{ date("Y-m-d H:m:s")}} </span>
         <h3 class="d-block">{{ "Nombre: ".$nombre }}</h3>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Quaerat beatae dignissimos enim aliquam obcaecati ratione! Officiis, architecto doloremque, 
            tenetur expedita quasi nulla illum debitis, aliquid nihil vel perferendis velit iure!
        </p>
    </main>
</body>
</html>