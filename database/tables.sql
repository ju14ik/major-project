-- DROP TABLES
DROP TABLE IF EXISTS `category`,`content`,`contenttype`,`contentcategorytype`,`imagetype`,`images`;

-- Table structure for table `category`
CREATE TABLE `category` (
  `category_id` INT(30) NOT NULL AUTO_INCREMENT UNIQUE,
  `category_name` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Table structure for table `content`
CREATE TABLE `content` (
  `content_id` INT(30) NOT NULL AUTO_INCREMENT UNIQUE,
  `title` VARCHAR(100) NOT NULL,
  `description` VARCHAR(300) NOT NULL,
  `content` TEXT NOT NULL,
  `content_timestamp` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Table structure for table `contenttype`
CREATE TABLE `contenttype` (
  `contenttype_id` INT(30) NOT NULL AUTO_INCREMENT UNIQUE,
  `contenttype_name` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`contenttype_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Table structure for table `imagetype`
CREATE TABLE `imagetype` (
  `imagetype_id` INT(30) NOT NULL AUTO_INCREMENT UNIQUE,
  `imagetype_name` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`imagetype_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Table structure for table `images`
CREATE TABLE `images` (
  `image_id` INT(30) NOT NULL AUTO_INCREMENT UNIQUE,
  `image_file_name` VARCHAR(100) NOT NULL,
  `image_description` VARCHAR(100) NULL,
  `image_href` VARCHAR(100) NULL,
  `image_alt` VARCHAR(100) NOT NULL,
  `imagetype_id` INT(30) NOT NULL,
  `content_id` INT(30) NULL,
  PRIMARY KEY (`image_id`),
  FOREIGN KEY(`content_id`) REFERENCES content(`content_id`),
  FOREIGN KEY(`imagetype_id`) REFERENCES imagetype(`imagetype_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;