CREATE TABLE IF NOT EXISTS flight (
  id int UNSIGNED NOT NULL AUTO_INCREMENT,
  pilot varchar(64) NOT NULL,
  code varchar(10) NOT NULL,
  destination varchar(30) NOT NULL,
  gate_code varchar(3) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;