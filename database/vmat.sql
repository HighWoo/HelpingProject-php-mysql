create table vmat(
Number INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
VseekerID VARCHAR(20) NOT NULL, 
VseekerTime VARCHAR(30) NOT NULL, 
DesiredVolunteer VARCHAR(50) NOT NULL,
INDEX(VseekerID),
FOREIGN KEY(VSeekerID) REFERENCES user(id)
) ENGINE= InnoDB default charset=utf8;