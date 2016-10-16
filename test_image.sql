create table test_image (
id              int(10)  not null AUTO_INCREMENT PRIMARY KEY,
name            varchar(25) not null default '',
image           blob        not null
 );