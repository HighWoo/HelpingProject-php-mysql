create table volcontents(
title varchar(50) not null,
volstart varchar(50) not null,
volclass varchar(50) not null,
volcontent varchar(50) not null,
voltime int(11) not null,
volnum int(11) not null,
id varchar(20) not null,
primary key(volnum)
)
default charset=utf8;
