create table comment (
number int unsigned not null primary key auto_increment,
board_number int unsigned not null,
id varchar(20) not null,
content text not null,
date datetime not null,
parent_number int unsigned not null default 0
)
ENGINE= InnoDB default charset=utf8;
