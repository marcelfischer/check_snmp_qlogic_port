check_snmp_qlogic_port

Nagios Plugin to check some statistics from a switchport of your choice.

Tested on Qlogic Sanbox 5802

Usage: <br>
-H = Hostname or IP
-C = SNMP Community
-p = Switch Port
-t = Mode (errors,status,speed,statistics)
        errors include status
        speed include status
        statistics include all other modes
-w = Warning
-c = Critical
