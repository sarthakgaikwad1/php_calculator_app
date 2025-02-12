<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator App 💻</title>
</head>

<style>
    *{
        font-family: sans-serif;
    }
    .container{
        display: flex;
        height: 550px;
        width: 100%;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    form input[type="text"]{
        height:20px;
        border: none;
        display: block;
        border-bottom: 2px solid #DC143C;
        font-size: 20px;
        outline: none;
    }

    form input[type="text"]:hover{
        border-bottom: 2px solid #6b8e23;
        margin-bottom: 10px;
    }

    select{
        width: 250px;
        height: 40px;
        font-size: 20px;
        margin-bottom: 10px;
    }

    button{
        width: 250px;
        height: 50px;
        font-size: 20px;
        background-color:rgb(220, 87, 20);
        border: none;
        outline: none;
        cursor: pointer;
        box-shadow: #808080 1px 1px;
        transition: background-color 0.3s, transform 0.3s;
    }

    .hero{
        position: absolute;
        top: 10px;
        left: 35%;
        margin-bottom: 10px;
    }

    button:hover {
        background: #808080;
        transform: scale(1.05);
    }

    .answer{
        color: #008000;
        font-size: 30px;
        margin-bottom: 10px;
    }

    .footer{
        position: relative;
        margin-top: 10px;
        left: 520px;
        color: #6c757d;
    }
</style>

<body>
    <h1 class="hero"> 💻 PHP Calculator App 📱</h1>
    <div class="container">
        <form action="" method="GET">
            <div class="answer">
            <?php
            if(isset($_GET['submit'])){
                $result1 = $_GET['num1'];
                $result2 = $_GET['num2'];
                $operator = $_GET['operator'];

        switch($operator){
                case"None":
                    echo"You need to select a Method!❌";
                break;
                case"Add":
                    echo $result1 + $result2;
                break;
                case"Subtract":
                    echo $result1 - $result2;
                break;
                case"Multiply":
                    echo $result1 * $result2;
                break;
                case"Divide":
                    echo $result1 / $result2;
                break;
        }
            }
            ?>
            </div>
            <br>
            <br>
            <input type="text" name="num1" placeholder="Enter First Number">
            <br>
            <br>
            <input type="text" name="num2" placeholder="Enter Second Number">
            <br>
            <br>
            <select name="operator" id="">
                <option>None</option>
                <option>Add</option>
                <option>Subtract</option>
                <option>Multiply</option>
                <option>Divide</option>
            </select>
            <br><br><br>
            <button type="submit" value="submit" name="submit">Calculate</button>
            </form>
    </div>
    <h4 class="footer">Made with <span>❤️</span> by Sarthak Gaikwad</h4>
</body>
</html>