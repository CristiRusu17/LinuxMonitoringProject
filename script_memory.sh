# !/bin/bash

free --giga -h | grep Mem | awk '{print $2,$3,$4,$6}' > memory.txt
cp memory.txt memory.csv
mysql -u root --local_infile=1 pex -e "LOAD DATA LOCAL INFILE 'memory.csv' INTO TABLE memory FIELDS TERMINATED BY ' ' enclosed by '\"' (total_mem, used_mem, free_mem, available_mem)"
                          