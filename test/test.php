<form method="get" action="">
    <input type="text" name="name[]" placeholder="Name1" /><br>
    <input type="email" name="email[]" placeholder="Email1" /> <br>

    <input type="text" name="name[]" placeholder="Name2" /><br>
    <input type="email" name="email[]" placeholder="Email2" /> <br>

    <input type="text" name="name[]" placeholder="Name3" /><br>
    <input type="email" name="email[]" placeholder="Email3" /> <br>
    <input type="submit">
</form>



<?php

$user = array(
    'name' =>  $_GET['name'],
    'email' =>  $_GET['email']
);


$library = array(
    'books' => array('harry potter', 'lord of rings', 'hunger games'),
    'issuer' => array('Ankush', 'Sunil', 'RAju')
);

// echo $library[books][0];
// echo $library[issuer][0];
// echo count($library["issuer"]);


$a = 2;




?>


<table border="1" style="">
    <thead>
        <th>Name of Book</th>
        <th>Issued By</th>
    </thead>
    <tbody>

        <?php
        //Get Educational Qualifications as According to Entered
        for ($i = 0; $i < count($library["books"]); $i++) {
            $x = $i;
            echo "<tr><td>" . $library[books][$x] . "</td>";
            echo "<td>" . $library[issuer][$x] . "</td></tr>";
        }

        ?>

    </tbody>
</table>