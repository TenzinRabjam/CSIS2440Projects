<?php
$name = $_POST['Name'];
$name = strtolower($name);
$name = ucwords($name);
$age = $_POST['Age'];
$address = $_POST['Address'];
$state = $_POST['State'];
$gender = $_POST['Gender'];
$yearsText = '';

printf ("<center><h1>WHO YOU ARE!! <h1></center><br>");

printf("Your name is : %s <br>",$name);

printf("Your were born on : %u <br>",$age);

printf("Your address is : %s <br>",$address);

printf("Your State is : %s <br>",$state);


if ($gender == "M") 
    {
echo '<body style="background-color: lightgreen">';
} 
else{
echo '<body style="background-color: beige">';
}
for ($nYear = $age; $nYear <= date('Y'); $nYear++) {
       $yearsText .= $nYear . ' ';

   }

   $yearsText = trim($yearsText);
   echo "Years you have lived:  ";
   echo $yearsText;
   
   print "<br><div style = 'color:blue'>She Walks in Beauty
            <br>BY LORD BYRON (GEORGE GORDON)
            <br>She walks in beauty, like the night
            <br>Of cloudless climes and starry skies;
            <br>And all that's best of dark and bright
            <br>Meet in her aspect and her eyes;
            <br>Thus mellowed to that tender light
            <br>Which heaven to gaudy day denies.
            <br>
            <br>One shade the more, one ray the less,
            <br>Had half impaired the nameless grace
            <br>Which waves in every raven tress,
            <br>Or softly lightens o'er her face;
            <br>Where thoughts serenely sweet express,
            <br>How pure, how dear their dwelling-place.
            <br>
            <br>And on that cheek, and o'er that brow,
            <br>So soft, so calm, yet eloquent,
            <br>The smiles that win, the tints that glow,
            <br>But tell of days in goodness spent,
            <br>A mind at peace with all below,
            <br>A heart whose love is innocent!<br></div>"
?>