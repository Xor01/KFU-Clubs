<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security+ Event</title>
    <style>
        #like-Btn.clicked {
            background-color: lightblue;
            color: white;
        }
    </style>
</head>
<body>
    <div id="box1">
        <center>
            <h1>security+</h1>
        </center>
        <div id="box2">
            <h3 style="margin-left: 20px;">Event description:</h3><br>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat perferendis quam rerum amet mollitia consectetur eligendi omnis nam quod vel, quis commodi quo. Ducimus numquam ab inventore perferendis dolorum unde?</p>
            <br><br>
            <center>
                <button>register</button>
            </center>
            <hr>
        </div>
        <div id="comments-review-section">
            <h3 style="margin-left: 20px;">Comments</h3><br>
            <form action="view_event.php" method="post">
                <textarea rows="6" cols="30" style="margin-left: 20px;" placeholder="comment.." name="comment"></textarea><br><br>
                <input type="submit" name="Comment_btn" value="Comment" style="margin-left: 20px;">
                <hr>
            </form>
            <button id="like-Btn" style="margin-left: 50px; margin-top: 10px;">👍</button>
        </div>
    </div>

    <script>
        document.getElementById('like-Btn').addEventListener('click', function() {
            var likeButton = document.getElementById('like-Btn');
            likeButton.classList.add('clicked');
            likeButton.disabled = true;
        });
    </script>

    <?php
    if(isset($_POST["Comment_btn"])){
        $comment = $_POST["comment"];
        if($comment){
            echo "<p style='margin-left: 20px;'>{$comment}</p>";
        }
    }
    ?>
</body>
</html>
