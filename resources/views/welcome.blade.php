<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Document</title>
</head>
<style>
.href{
    display: flex;
    justify-content: center;
    margin-top: 200px;
    
    /* align-items: center; */
}

</style>
<body>
    <div class="href">
        <a href="{{ route('customer.store') }}">
            Sign to CRUD
        </a>
    </div>
    
</body>
</html>