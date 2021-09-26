<?php
function KLog($data, $remark=''){
    file_put_contents(
        '../runtime/keon.log',
        "\r\n\r\n{$remark}"."\r\n".print_r($data,true).date('Y-m-d H:i:s'),
        FILE_APPEND
    );
}
