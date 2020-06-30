<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"); // Lengkapi di sini
        print_r($kids);
        echo "<br><br>";

        $adults = array("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"); 
        print_r($adults);

        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        $itung = count($kids);
        echo "Total Kids: $itung" ; // Berapa panjang array kids
        echo "<br>";
        echo "<ol>"; 
        echo "<li> $kids[0] </li>";
        echo "<li> $kids[1] </li>";
        echo "<li> $kids[2] </li>";
        echo "<li> $kids[3] </li>";
        echo "<li> $kids[4] </li>";
        echo "<li> $kids[5] </li>";
        // Lanjutkan

        echo "</ol>";
        $itung2 = count($adults);
        echo "Total Adults: $itung2" ;// Berapa panjang array adults
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        echo "<li> $adults[1] </li>";
        echo "<li> $adults[2] </li>";
        echo "<li> $adults[3] </li>";
        echo "<li> $adults[4] </li>";
        // Lanjutkan

        echo "</ol>";

        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
        $bio = array( array( 'Will Byers','12','Will the Wise','Alive'), array('Mike Wheeler','12','Dungeon Mater','Alive'), array('Jim Hopper','43','Chief Hopper','Deceased'), array('Eleven','12','El','Alive'));
        //print_r($bio);
        echo "Name: "; print_r($bio[0][0]); echo "<br>";
        echo "Age: "; print_r($bio[0][1]); echo "<br>";
        echo "Aliases: "; print_r($bio[0][2]); echo "<br>";
        echo "Status: "; print_r($bio[0][3]); echo "<br>";
        echo "<br>";

        echo "Name: "; print_r($bio[1][0]); echo "<br>";
        echo "Age: "; print_r($bio[1][1]); echo "<br>";
        echo "Aliases: "; print_r($bio[1][2]); echo "<br>";
        echo "Status: "; print_r($bio[1][3]); echo "<br>";
        echo "<br>";

        echo "Name: "; print_r($bio[2][0]); echo "<br>";
        echo "Age: "; print_r($bio[2][1]); echo "<br>";
        echo "Aliases: "; print_r($bio[2][2]); echo "<br>";
        echo "Status: "; print_r($bio[2][3]); echo "<br>";
        echo "<br>";

        echo "Name: "; print_r($bio[3][0]); echo "<br>";
        echo "Age: "; print_r($bio[3][1]); echo "<br>";
        echo "Aliases: "; print_r($bio[3][2]); echo "<br>";
        echo "Status: "; print_r($bio[3][3]); echo "<br>";
        echo "<br>";

        $challenges = [ "dom", "php", "oop", "SQL"];
        $grade = [90, 85, 95, 65, 70];
        $namaSiswa = "abduh";

        echo $namaSiswa[3];


    ?>
</body>
</html>