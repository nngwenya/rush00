
<HTML>
    <HEAD>
        <TITLE>login</TITLE>
        <link rel="stylesheet" type="text/css" href="rush.css"/>
    </HEAD>
    <BODY>
            <div class="head2"><h1>FOR MAN</h1></div>
            <div class="paragraph"><p><i>Put simply, a Goth is someone who finds beauty in things others consider dark. They love all that is dark and mysterious. That doesn't mean Goths are evil, it just means they have a different perspective to many. And it also doesn't mean Goths are unkind, violent or lacking in humour, in fact quite the opposite is true. Goths love to laugh but their humour is more of the black comedy sort. They aren't sad because they like dark things - dark things make them happy and inspire them. Goths are often intelligent, romantic and artistic realists. Being Goth is not about how one dresses. Most of what you can find written about Goth is that it was something that was born out of the Punk movement in the late 70’s and that most Goths wear black. I disagree. Goth isn’t something that was created in the 70’s because it always was.</i></p></div>
            <?php
                    include('database/index.php');
                     $query = "SELECT * FROM `MAN`";
                     $results = mysqli_query($con, $query);
                     if (mysqli_num_rows($results) > 0)
                         {
                         while ($row = mysqli_fetch_assoc($results))
                                {
                                    echo "<div class=\"single-game\">
                                    <img class=\"clothes\" src=\"".$row['description']."\">
                                    <p class=\"name\">".$row['name']."</p>
                                    <p class=\"price\">R ".$row['price']."</p>
                                    <a href=\"#\"><p class=\"cart\">Add to cart</p></a></div>";
                                }
                         }
            ?>
    </BODY>
    <hr>
    <footer><i>Copyright &copy; nngwenya 2017.All rights reserved.</i></footer>
</HTML>