<?php
# Plugin: check_snmp_brocade_fcport
# Copyright (2009): Christian Heim <christian.heim@barfoo.org>
 
$opt[1] = "--title \"Switchport Errors for ". str_replace("_","/",$servicedesc) ." on $hostname\" ";
 
$def[1]  = "DEF:errors=$RRDFILE[1]:$DS[1]:AVERAGE ";
 
$def[1] .= "LINE1:errors#FF007F:\"Errors\" " ;
$def[1] .= "GPRINT:errors:LAST:\"%6.2lf errors last\" " ;
$def[1] .= "GPRINT:errors:AVERAGE:\"%6.2lf errors avg\" " ;
$def[1] .= "GPRINT:errors:MAX:\"%6.2lf errors max\\l\" ";
 
$opt[2] = "-X0 --title \"Switchport Bytes Throughput for ". str_replace("_","/",$servicedesc) ." on $hostname\" ";
$def[2]  = "DEF:B_tx=$RRDFILE[1]:$DS[2]:AVERAGE ";
$def[2] .= "DEF:B_rx=$RRDFILE[1]:$DS[3]:AVERAGE ";

$def[2] .= "LINE1:B_rx#157419FF:\"ThroughputRX\" " ;
$def[2] .= "GPRINT:B_rx:LAST:\"%6.2lf%sB/s last\" " ;
$def[2] .= "GPRINT:B_rx:AVERAGE:\"%6.2lf%sB/s avg\" " ;
$def[2] .= "GPRINT:B_rx:MAX:\"%6.2lf%sB/s max\\n\" ";

$def[2] .= "LINE1:B_tx#0000EF:\"ThroughputTX\" " ;
$def[2] .= "GPRINT:B_tx:LAST:\"%6.2lf%sB/s last\" " ;
$def[2] .= "GPRINT:B_tx:AVERAGE:\"%6.2lf%sB/s avg\" " ;
$def[2] .= "GPRINT:B_tx:MAX:\"%6.2lf%sB/s max\\n\" ";

 
?>
