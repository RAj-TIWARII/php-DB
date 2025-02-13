<?php
     $query = "select * from reg ";
     $data = mysqli_query($con,$query);
    while($result = mysqli_fetch_array($data)){

    ?>