TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER NEW_HABITAT BEFORE INSERT ON pokemon_habitats\nFOR EACH ROW \nBEGIN \n	IF NEW.hab_name = "" THEN\n		SET NEW.hab_name = "Unknown";\n	END IF;\n	IF NEW.hab_descript = "" THEN\n		SET NEW.hab_descript = "Unknown";\n	END IF; \n	END'
sql_modes=1344274432
definers='root@localhost'
client_cs_names='utf8'
connection_cl_names='utf8_general_ci'
db_cl_names='latin1_swedish_ci'
