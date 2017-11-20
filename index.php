<html>php <?php require_once 'ytmp3_downloader.php';

$url = "http://www.youtube.com/watch?v=4Yj8BYezxCc"; $download = new ytmp3_downloader("",""); $download->setYoutubeURL($url); $datar = $download->requestMP3();

echo json_encode($datar);

?>
    </html>