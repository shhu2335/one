use  one;

SELECT * FROM developer ;
drop table  land ;

CREATE TABLE IF NOT EXISTS `one`.`Diwaniyah` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `TypeOfOffer` INT NULL,
  `Numberoftoilets` INT NULL,
   `numberofstreet` INT NULL,
   `electricity` boolean NULL,
   `asphalt` boolean NULL,
   `bitshaer` boolean NULL,
  `Typeoftoilets` VARCHAR(255) NULL,
  `diraction` VARCHAR(255) NULL,
  `Features` text NULL,
  `Typeofinstrument` VARCHAR(255) NULL,
   `space` VARCHAR(255) NULL,   
     `priceofonemeter`INT NULL,
  `AgeOfProperty` DATE NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB




