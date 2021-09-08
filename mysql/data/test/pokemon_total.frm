TYPE=VIEW
query=select `test`.`pokemon`.`pok_id` AS `pok_id`,`test`.`pokemon`.`pok_name` AS `pok_name`,`test`.`base_stats`.`b_atk` AS `b_atk`,`test`.`base_stats`.`b_def` AS `b_def`,`test`.`base_stats`.`b_hp` AS `b_hp`,`test`.`base_stats`.`b_speed` AS `b_speed`,`test`.`base_stats`.`b_sp_atk` AS `b_sp_atk`,`test`.`base_stats`.`b_sp_def` AS `b_sp_def`,sum((((((`test`.`base_stats`.`b_atk` + `test`.`base_stats`.`b_def`) + `test`.`base_stats`.`b_hp`) + `test`.`base_stats`.`b_speed`) + `test`.`base_stats`.`b_sp_atk`) + `test`.`base_stats`.`b_sp_def`)) AS `total` from (`test`.`pokemon` join `test`.`base_stats` on((`test`.`pokemon`.`pok_id` = `test`.`base_stats`.`pok_id`))) group by `test`.`pokemon`.`pok_id`
md5=e4e64fad3447de5ce6ebfb61888ac909
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2019-04-15 19:34:00
create-version=1
source=select `pokemon`.`pok_id` AS `pok_id`,`pokemon`.`pok_name` AS `pok_name`,`base_stats`.`b_atk` AS `b_atk`,`base_stats`.`b_def` AS `b_def`,`base_stats`.`b_hp` AS `b_hp`,`base_stats`.`b_speed` AS `b_speed`,`base_stats`.`b_sp_atk` AS `b_sp_atk`,`base_stats`.`b_sp_def` AS `b_sp_def`,sum((((((`base_stats`.`b_atk` + `base_stats`.`b_def`) + `base_stats`.`b_hp`) + `base_stats`.`b_speed`) + `base_stats`.`b_sp_atk`) + `base_stats`.`b_sp_def`)) AS `total` from (`pokemon` join `base_stats` on((`pokemon`.`pok_id` = `base_stats`.`pok_id`))) group by `pokemon`.`pok_id`
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `test`.`pokemon`.`pok_id` AS `pok_id`,`test`.`pokemon`.`pok_name` AS `pok_name`,`test`.`base_stats`.`b_atk` AS `b_atk`,`test`.`base_stats`.`b_def` AS `b_def`,`test`.`base_stats`.`b_hp` AS `b_hp`,`test`.`base_stats`.`b_speed` AS `b_speed`,`test`.`base_stats`.`b_sp_atk` AS `b_sp_atk`,`test`.`base_stats`.`b_sp_def` AS `b_sp_def`,sum((((((`test`.`base_stats`.`b_atk` + `test`.`base_stats`.`b_def`) + `test`.`base_stats`.`b_hp`) + `test`.`base_stats`.`b_speed`) + `test`.`base_stats`.`b_sp_atk`) + `test`.`base_stats`.`b_sp_def`)) AS `total` from (`test`.`pokemon` join `test`.`base_stats` on((`test`.`pokemon`.`pok_id` = `test`.`base_stats`.`pok_id`))) group by `test`.`pokemon`.`pok_id`
