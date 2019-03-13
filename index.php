<?php
     $web_servers = [
                     '188.131.238.133',
                                     '188.131.177.111'
                                             ];

                       foreach($web_servers as $k=>$v){
                       $cmd = 'ssh '.$v.'"cd /home/wwwroot/default/api && git pull" ';
                                    echo $cmd;   echo '</br>';
                                      $res = shell_exec($cmd);
                                          echo $res; echo '</br>';
                                 }
?>
