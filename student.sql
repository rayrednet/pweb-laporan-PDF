-- Table structure for table `student`

CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SIN` varchar(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `photo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table `student`

INSERT INTO `student` (`SIN`, `name`, `gender`, `telp`, `address`, `photo`) VALUES
('10110470110', 'Taylor Swift', 'Female', '18299288272', 'Broadway St 1', '1.png'),
('10110470111', 'Dwayne Johnson', 'Male', '1829228827727', 'Main St 2', '2.png'),
('10110470112', 'Madison Beer', 'Female', '18561777166', 'Park Ave 3', '3.png'),
('10110470113', 'Timothée Chalamet', 'Male', '1828817717', 'Elm St 4', '4.png'),
('10114072001', 'Jennie Kim', 'Female', '82283773622', 'Washington St 5', '5.png'),
('10110470114', 'Johny Deep', 'Male', '182199288273', 'Chestnut St 6', '6.png'),
('10110470115', 'Bella Poarch', 'Female', '1822882827728', 'Oak St 7', '7.png'),
('10110470116', 'Casey Thai Luong', 'Male', '12055617771667', 'Maple Ave 8', '8.png'),
('10110470117', 'Kim Hyung-seo', 'Female', '82028817718', 'Pine St 9', '9.png'),
('10114072002', 'Brian Imanuel Soewarno', 'Male', '6289283773623', 'Cedar St 10', '10.png'),
('10110470118', 'Maitreyi Ramakrishnan', 'Female', '6289228827729', 'Mulberry St 11', '11.png'),
('10110470119', 'Charlie Puth', 'Male', '628561777168', 'Elmwood Ave 12', '12.png'),
('10110470120', 'Dove Cameron', 'Female', '62828817719', 'Broad St 13', '13.png'),
('10114072003', 'Abel Makkonen Tesfaye', 'Male', '6289283773624', 'Washington Ave 14', '14.png'),
('10110470121', 'Sabrina Carpenter', 'Female', '628199288274', 'Maple St 15', '15.png'),
('10110470122', 'Harry Styles', 'Male', '6289228827730', 'Main St 16', '16.png'),
('10110470123', 'Prinyanka Chopra', 'Female', '628561777169', 'Chestnut Ave 17', '17.png'),
('10110470124', 'Tom Holland', 'Male', '62828817720', 'Pine Ave 18', '18.png'),
('10114072004', 'Olivia Rodrigo', 'Female', '6289283773625', 'Broadway Ave 19', '19.png'),
('10114072005', 'Christopher Hemsworth', 'Male', '6289283773626', 'Oak Ave 20', '20.png');
