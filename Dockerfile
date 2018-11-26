FROM solr

RUN wget http://dev.mysql.com/get/Downloads/Connector-J/mysql-connector-java-5.1.46.tar.gz

RUN mkdir -p contrib/dataimporthandler/lib

RUN tar xvzf mysql-connector-java-5.1.46.tar.gz -C contrib/dataimporthandler/lib