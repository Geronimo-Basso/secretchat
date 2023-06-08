<?php 
include 'views/header.php';
?>

<article>
    <div>
        <p>Welcome to Secret Chat! <br>
        Here you can chat with your friends without anyone knowing what you are talking about. <br>
        Just create a new chatroom and share the code with your friends!</br>
        When the session is <b>finished</b> all the <b>information will be deleted.</b> 
        </p>    
    </div>
    <button class="button"><a href="create-chat/sc_create_chat.php"><b>Create a chatroom<b></a></button>
    <button class="button"><a href="join-chat/sc_join_chat.php"><b>Join a chatroom<b></a></button>
</article>

<?php 
include 'views/footer.php';
?>