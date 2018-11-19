# docker-compose-solr-search

RUN DOCKER 
- docker-compose up -d --build

Create solr core
- docker exec -it --user=solr solr_container_name bin/solr create_core -c core_solr_name

Import index to solr from mysql database
- docker run --name core_solr_name -d -p 8983:8983 -t -v ./main/conf:/opt/solr/mydata solr
