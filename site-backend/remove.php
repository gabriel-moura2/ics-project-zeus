<html>

    <?php

    $query = 'DELETE FROM people WHERE people_id = '.$_GET['id'];
    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    ?>

    <script type="text/javascript">
        alert("Successfully Deleted");
        window.location = "index.php";
    </script>

</html>