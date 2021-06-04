require_once("./Config/Config.php");
$url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';

$arrUrl = explode("/", $url);
$controller = $arrUrl[0];
$method = $arrUrl[0];
$params = "";
if (!empty($arrUrl[1])) {
    if ($arrUrl[1] != "") {
        $method = $arrUrl[1];
    }
}
// a partir de la posicion 2 almaceno los parametros.
if (!empty($arrUrl[2])) {
    if ($arrUrl[2] != "") {
        for ($i = 2; $i < count($arrUrl); $i++) {
            $params .= $arrUrl[$i] . ',';
            //esto almacena los parametros
        }
        $params = trim($params, ',');
        echo $params;
    }
}
