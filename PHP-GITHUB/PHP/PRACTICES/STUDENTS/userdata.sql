--
-- Table structure for table `userdata`
--

CREATE TABLE userdata (
  userid int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username varchar(100) NOT NULL,
  password varchar(100) NOT NULL,
  credit_card_number int(11) NOT NULL
);

--
-- Dumping data for table `userdata`
--

INSERT INTO userdata (username, password, credit_card_number) VALUES ('hyacinthe', '1234', 401010545);
INSERT INTO userdata (username, password, credit_card_number) VALUES ('rady', '0000', 357242010);
INSERT INTO userdata (username, password, credit_card_number) VALUES ('him', '2222', 227037471);
INSERT INTO userdata (username, password, credit_card_number) VALUES ('ronan', '3345', 530173757);
INSERT INTO userdata (username, password, credit_card_number) VALUES ('ratha', '2257', 348034715);
