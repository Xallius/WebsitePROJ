
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('addTime'))
{
    function addTime ($rOptionNum, $serviceName){
        $ci =& get_instance();
        if ($rOptionNum === $serviceName){
            $starttime = date('Y-m-d H:i:s',strtotime($ci->input->post('date').' '.$ci->input->post('appTime')));

            $addedTime2 = date('Y-m-d H:i:s',strtotime('+2 hours',strtotime($starttime)));
        }
    }
}
?>


