------------------ Categories and types -------------------

-- Data for `category` table
INSERT INTO `category`(`category_name`)
VALUES
('homepage-headings'),
('homepage-content'),
('breakfast'),
('lunch'),
('dinner'),
('snacks'),
('dessert'),
('drinks');

-- Data for `contenttype` table
INSERT INTO `contenttype`(`contenttype_name`) 
VALUES
('Text'),
('Recipe'),
('Homepage text with image');

-- Data for `imagetype` table
INSERT INTO `imagetype`(`imagetype_name`) 
VALUES
('logo'),
('thumbnail'),
('full size image'),
('icon'),
('main home image');