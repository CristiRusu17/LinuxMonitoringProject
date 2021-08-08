# !/bin/bash

uptime | awk '{print $1,";",$3,";",$4,";",$8,$9,$10}' > uptime.txt
cp uptime.txt uptime.csv
mysql -u root --local_infile=1 pex -e "LOAD DATA LOCAL INFILE 'uptime.csv' INTO TABLE uptime FIELDS TERMINATED BY ';' enclosed by '\"' (time, sys_time_up, nr_users, sys_load_avg)"
