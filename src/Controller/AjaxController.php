<?php namespace CCTM\Controller;

class AjaxController {

    public function getIndex()
    {
        print json_encode(array('hash'=>'cat'));
        wp_die();
    }
}
/*EOF*/