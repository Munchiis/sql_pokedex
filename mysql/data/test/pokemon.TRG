TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER NEW_POKEMON BEFORE INSERT ON POKEMON\nFOR EACH ROW \nBEGIN \n	IF NEW.pok_height < 0 THEN\n		SET NEW.pok_height = 0;\n	END IF;\n	IF NEW.pok_weight < 0 THEN\n		SET NEW.pok_weight = 0;\n	END IF;\n	IF NEW.pok_base_experience < 0 THEN\n		SET NEW.pok_base_experience = 0;\n	END IF; \n	END'
sql_modes=1344274432
definers='root@localhost'
client_cs_names='utf8'
connection_cl_names='utf8_general_ci'
db_cl_names='latin1_swedish_ci'
