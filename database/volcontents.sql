CREATE TABLE `volcontents` (
  `title` varchar(50) NOT NULL COMMENT '제목',
  `volstart` varchar(50) NOT NULL COMMENT '봉사시작시간',
  `volclass` varchar(50) NOT NULL COMMENT '봉사 종류',
  `volcontent` varchar(50) NOT NULL COMMENT '봉사 내용',
  `voltime` int(11) NOT NULL COMMENT '봉사 시간',
  `voladd` varchar(30) NOT NULL,
  `addcontent` varchar(50) NOT NULL COMMENT '주의사항',
  `volnum` int(11) NOT NULL COMMENT '번호',
  `id` varchar(20) NOT NULL,
  `checka` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;