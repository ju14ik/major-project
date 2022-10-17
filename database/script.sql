-- Database: `hikefoodie`

----------------------------------------------------------

-- Table structure for table `category`

CREATE TABLE `category` (
  `category_id` INT(30) NOT NULL AUTO_INCREMENT UNIQUE,
  `category_name` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8

----------------------------------------------------------

-- Data for `category` table

INSERT INTO `category`(`category_name`)
VALUES('homepage'),
('breakfast'),
('lunch'),
('dinner'),
('snacks'),
('stoveless-meals'),
('stove-cooked-meals'),
('dessert'),
('drinks')

----------------------------------------------------------

-- Table structure for table `content`

CREATE TABLE `content` (
  `content_id` INT(30) NOT NULL AUTO_INCREMENT UNIQUE,
  `title` VARCHAR(100) NOT NULL,
  `description` VARCHAR(1000) NOT NULL,
  `content` TEXT NOT NULL,
  `content_timestamp` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8

----------------------------------------------------------

-- Data for `content` table

INSERT INTO `content`(`title`, `description`, `content`) 
VALUES ('TestTitle','TestDescription','TestContent'),
('TestTitle2','TestDescription2','TestContent2'),
('TestTitle3','TestDescription3','TextContent1')


----------------------------------------------------------

-- Table structure for table `contenttype`

CREATE TABLE `contenttype` (
  `contenttype_id` INT(30) NOT NULL AUTO_INCREMENT UNIQUE,
  `contenttype_name` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`contenttype_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8

----------------------------------------------------------

-- Data for `contenttype` table

INSERT INTO `contenttype`(`contenttype_name`) 
VALUES ('Text'),
('Recipe')

----------------------------------------------------------

-- Table structure for table `contentcategorytype`

CREATE TABLE `contentcategorytype` (
  `contentcategorytype_id` INT(30) NOT NULL AUTO_INCREMENT UNIQUE,
  `category_id` INT(30) NOT NULL,
  `content_id` INT(30) NOT NULL,
  `contenttype_id` INT(30) NOT NULL,
  PRIMARY KEY (`contentcategorytype_id`),
  FOREIGN KEY(`category_id`) REFERENCES category(`category_id`),
  FOREIGN KEY(`content_id`) REFERENCES content(`content_id`),
  FOREIGN KEY(`contenttype_id`) REFERENCES contenttype(`contenttype_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8

----------------------------------------------------------

-- Data for `contentcategorytype` table

INSERT INTO `contentcategorytype`(`category_id`, `content_id`, `contenttype_id`) 
VALUES ('2','1','2'),
('3','1','2'),
('2','3','1')

----------------------------------------------------------

-- Table structure for table `imagetype`

CREATE TABLE `imagetype` (
  `imagetype_id` INT(30) NOT NULL AUTO_INCREMENT UNIQUE,
  `imagetype_name` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`imagetype_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8

----------------------------------------------------------

-- Data for `imagetype` table

INSERT INTO `imagetype`(`imagetype_name`) 
VALUES ('logo'),
('thumbnail'),
('full size image'),
('icon')

----------------------------------------------------------

-- Table structure for table `images`

CREATE TABLE `images` (
  `image_id` INT(30) NOT NULL AUTO_INCREMENT UNIQUE,
  `image_file_name` VARCHAR(100) NOT NULL,
  `imagetype_id` INT(30) NOT NULL,
  `content_id` INT(30) NULL,
  PRIMARY KEY (`image_id`),
  FOREIGN KEY(`content_id`) REFERENCES content(`content_id`),
  FOREIGN KEY(`imagetype_id`) REFERENCES imagetype(`imagetype_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8

----------------------------------------------------------

-- Data for `images` table

INSERT INTO `images`(`image_file_name`, `imagetype_id`, `content_id`) 
VALUES ('breakfast/oatmeal.jpg','2','1'),
('breakfast/oatmeal.jpg','2','2'),
('breakfast/oatmeal.jpg','3','1'),
('breakfast/oatmeal.jpg','3','2'),
('logo.png','1',NULL)