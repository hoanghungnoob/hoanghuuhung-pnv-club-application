<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
        }
        form{
            height: auto;
            width: 550px;
            border: 2px dashed;
            padding: 30px;
        }
        button{
            width: 100%;
            margin-top: 30px;
            font-size: larger;
            background-color: orange;
            border: 2px solid orangered;
        }
        .name,.club,.skill,.radio{
            display: grid;
            grid-template-columns: 40% 60%;
        }
        .skill .left{
            display: grid;
            grid-template-columns: 10% 40% 10% 40%;
            gap: 10px;
        } 
        input[type="text"]{
            height: 20px;
            width: 100%;
        }
        .radio .left{
            display: grid;
            grid-template-columns: 10% 40% 10% 40%;
        }
        select{
            width: 102%;
            height: 25px;
        }
        input[type="radio"]{
            height: 20px;
        }
    </style>
</head>
<body>
    <form action="result.php" method="post">
        <h3>Form Post data</h3>
        <div class="container">  
            <div class="name">
                <label for="">Name:</label>
                <div class="left">
                    <input type="text" name="username" id="name">
                </div>
            </div>
            <div class="club">
                <label for="">Club you want to apply</label>
                <div class="left">
                <select name="option" id="option">
                    <option value="robotic club">Robotic club</option>
                    <option value="coding club">Coding club</option>
                    <option value="music club">Music club</option>
                </select>
                </div>
            </div>
            <div class="radio">
                <label for="">Be time for you</label>
                <div class="left" >
                    <input type="radio" name="date" id="" value="Saturday morings">Saturday morings
                    <input type="radio" name="date" id="" value="Saturday morings">Sartuday afternoon
                    <input type="radio" name="date" id="" value="Sunday afternoons">Sunday afternoons
                </div>
            </div>
            <div class="skill">
                <label for="">Skill</label>
                <div class="left">
                    <input type="checkbox" name="skill[]" value="the best coder" id="skill1"> the best coder
                    <input type="checkbox" name="skill[]" value="good in arts" id="skill2"> good in arts
                    <input type="checkbox" name="skill[]" value="a super star" id="skill3"> a super star
                    <input type="checkbox" name="skill[]" value="a crazy dancer" id="skill4"> a crazy dancer
                    <input type="checkbox" name="skill[]" value="singer" id="skill5"> singer
                    <input type="checkbox" name="skill[]" value="good in design" id="skill6"> good in design
                    <input type="checkbox" name="skill[]" value="the best eater" id="skill7"> the best eater
                    <input type="checkbox" name="skill[]" value="good in speeches" id="skill8"> good in speeches
                </div>
            </div>
            <button>Submit</button>
        </div>
    </form>
</body>
</html>