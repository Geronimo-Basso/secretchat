<?php 
    include 'header.php';
?>

<section>
    <div>
        <h1>Session ID: <?php echo generate_session_id()?></h1>
    </div>
</section>    


<?php 

    include 'footer.php';

    function generate_session_id(){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $session_id = '';
        for ($i = 0; $i < 10; $i++) {
            $session_id .= $characters[rand(0, $charactersLength - 1)];
        }
        return $session_id;
    }
    