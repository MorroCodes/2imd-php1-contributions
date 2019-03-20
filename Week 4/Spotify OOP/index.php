<?php
    session_start();
    require_once("classes/Artist.class.php");
    if(!isset($_SESSION["user"])){
        header("location: login.php");
    }
    $artists = Artist::getArtists();
?>
<html lang="en">
<?php include_once("head.inc.php") ?>
<body>
    <div class="grid-container">
        <?php include_once("nav.inc.php") ?>
        <main>
            <?php foreach($artists as $artist):?>
                <a href=<?php echo "artist.php?id=" . $artist["id"] ?> class="artist"><img src="img/default-avatar.png" alt="" width="180px" height="180px"><?php echo $artist["name"];?></a>
            <?php endforeach; ?>
        </main>
    </div>
</body>
</html>