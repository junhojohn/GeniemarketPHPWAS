
/* SQL Version 1 */
CREATE TABLE SELLERINFO (
 sellerID VARCHAR(255) NOT NULL PRIMARY KEY,
 sellerName VARCHAR(255) NOT NULL,
 sellerDescription VARCHAR(255),
 sellerKakaoAccount VARCHAR(255) NOT NULL,
 sellerPwd VARCHAR(255) NOT NULL,
 sellerPhoneNumber VARCHAR(255) NOT NULL
) ENGINE=INNODB character set = utf8;

CREATE TABLE IMAGEPATHINFO (
 imageFilePath VARCHAR(255) NOT NULL PRIMARY KEY,
 productName VARCHAR(255) NOT NULL,
 sellerID VARCHAR(255) NOT NULL 
) ENGINE=INNODB character set = utf8;

CREATE TABLE PRODUCTINFO (
 productName VARCHAR(255) NOT NULL PRIMARY KEY,
 productPrice VARCHAR(255) NOT NULL,
 productItemCnt VARCHAR(255) NOT NULL,
 productDescription VARCHAR(255) NOT NULL,
 sellerID VARCHAR(255) NOT NULL, 
 imageFilePath VARCHAR(255) NOT NULL
) ENGINE=INNODB character set = utf8;

ALTER TABLE PRODUCTINFO 
ADD CONSTRAINT sellerID2  
FOREIGN KEY (sellerID) 
REFERENCES SELLERINFO (sellerID);

ALTER TABLE IMAGEPATHINFO 
ADD CONSTRAINT sellerID1 
FOREIGN KEY (sellerID) 
REFERENCES SELLERINFO (sellerID);

ALTER TABLE IMAGEPATHINFO 
ADD CONSTRAINT productName1 
FOREIGN KEY (productName) 
REFERENCES PRODUCTINFO (productName);

INSERT INTO `SELLERINFO`(`sellerID`, `sellerName`, `sellerDescription`, `sellerKakaoAccount`, `sellerPwd`, `sellerPhoneNumber`) VALUES ("JFamily", "JFamily", "We are JFamily.", "JFamily", "wnsgh3535", "01093484852");
INSERT INTO `IMAGEPATHINFO2`(`imageFilePath`) VALUES ("JFamily_20180805175149.jpg");
INSERT INTO `PRODUCTINFO2`(`productName`, `productPrice`, `productItemCnt`, `productDescription`, `sellerID`, `imageFilePath`) VALUES ("가습기","20000","1","최신삼성가습기","JFamily","JFamily_20180805175149.jpg");