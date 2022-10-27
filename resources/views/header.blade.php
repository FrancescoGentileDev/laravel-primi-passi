<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="/home">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>

    </div>
</body>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    div {
        width: 100%;
        height: 80px;
        background-color: grey;
        font-size: 2rem;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
    }
    a {
        text-decoration: none;
        color: white;
    }
</style>
</html>
