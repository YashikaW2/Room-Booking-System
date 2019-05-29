**
 * Created by IntelliJ IDEA.
 * User: HP
 * Date: 12/7/2018
 * Time: 2:08 PM
 */

require_once __DIR__ . '/../business/impl/ServiceDetailBOImpl.php';
require_once __DIR__ . '/../core/ServiceDetail.php';

$serviceDetailBO = new ServiceDetailBOImpl() ;

//$operation=$_GET["operation"];

$mothod = $_SERVER["REQUEST_METHOD"];

switch ($mothod) {
    case "GET":
        echo  json_encode($serviceDetailBO->getAllServiceDetail());
        break;
    case "POST":
        $serviceDetailID = $_POST['s_id'];
        $serviceDetailID = $_POST['re_name'];

        $tempServiceDetails = new Faclities($serviceDetailID, $serviceDetailID);
        $resp = $serviceDetailBO->addServiceDetail($tempServiceDetails);
        echo $resp;
        break;

}
