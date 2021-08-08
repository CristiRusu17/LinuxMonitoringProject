# !/bin/bash

ps -e -o %p, -o lstart -o ,%C, -o %mem -o ,%c > process.txt
awk 'NR>1' process.txt > process.csv
mysql -u root proba -e "delete from process"
mysql -u root --local_infile=1 pex -e "LOAD DATA LOCAL INFILE 'process.csv' INTO TABLE process FIELDS TERMINATED BY ',' enclosed by '\"' (id, time, cpu, mem, cmd)"
