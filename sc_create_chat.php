<?php 
    include 'header.php';
    include 'includes/dbh.inc.php';
?>

<section>
    <div>
        <h1>Session ID: <?php echo generate_session()?><br></h1>
    </div>
</section>    


<?php 

    include 'footer.php';

    function generate_session(){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $session_id = '';
        $timeStarted = date("Y-m-d H:i:s");
        $time_limit = 10;

        for ($i = 0; $i < 10; $i++) {
            $session_id .= $characters[rand(0, $charactersLength - 1)];
        }

        $query = "INSERT INTO Chat (idSession,timeStarted,timeLimit) VALUES ('$session_id','$timeStarted','$time_limit')";
        $results = executeQuery($query);

        $query2 = "SELECT * FROM Chat";
        $results2 = executeQuery($query2);
        // Process the results
        foreach ($results2 as $row) {
            echo $row['idSession'] . "<br>";
            echo $row['timeStarted'] . "<br>";
            echo $row['timeLimit'] . "<br>";
        }

        return $session_id;
    }   
    