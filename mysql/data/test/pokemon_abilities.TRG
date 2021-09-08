TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER NEW_ABILITY BEFORE INSERT ON pokemon_abilities\nFOR EACH ROW \nBEGIN \n	IF NEW.is_hidden >= 0 and NEW.is_hidden < 2 THEN\n		SET NEW.is_hidden = 0;\n	END IF;\n	IF NEW.slot > 0 and NEW.slot < 4 THEN\n		SET NEW.slot = 1;\n	END IF; \n	END'
sql_modes=1344274432
definers='root@localhost'
client_cs_names='utf8'
connection_cl_names='utf8_general_ci'
db_cl_names='latin1_swedish_ci'
