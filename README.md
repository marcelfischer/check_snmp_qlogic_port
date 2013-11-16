check_snmp_qlogic_port

Nagios Plugin to check some statistics from a switchport of your choice.

Tested on Qlogic Sanbox 5802

Usage: <br>
-H = Hostname or IP <br>
-C = SNMP Community <br>
-p = Switch Port <br>
-t = Mode (errors,status,speed,statistics) <br>
        errors include status <br>
        speed include status <br>
        statistics include all other modes <br>
-w = Warning <br>
-c = Critical
