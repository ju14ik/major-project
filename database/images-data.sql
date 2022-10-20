------------------ Data for `images` table -------------------

INSERT INTO `images`(`image_file_name`, `image_description`, `image_href`, `image_alt`, `imagetype_id`, `content_id`) 
VALUES 
-- LOGO--
('logo.png',NULL,'index.php','image_alt','1',NULL),
-- HOME PAGE IMAGE --
('main/main.jpg',NULL,NULL,'image_alt','5',NULL), 
-- HOME PAGE ICONS --
('icons/breakfast.png','Breakfast','content.php?pagename=breakfast','image_alt','4',NULL),
('icons/lunch.png','Lunch','content.php?pagename=lunch','image_alt','4',NULL),
('icons/dinner.png','Dinner','content.php?pagename=dinner','image_alt','4',NULL),
('icons/snacks.png','Snacks','content.php?pagename=snacks','image_alt','4',NULL),
('icons/dessert.png','Dessert','content.php?pagename=dessert','image_alt','4',NULL),
('icons/drinks.png','Drinks','content.php?pagename=drinks','image_alt','4',NULL),
-- HOME PAGE CONTENT --
-- Thumbnails --
('main/best-foods-th.jpg','','','image_alt','2','2'),
('main/right-calories-th.jpg','','','image_alt','2','3'),
('main/right-nutrition-th.jpg','','','image_alt','2','4'),
('main/how-often-to-eat-th.jpg','','','image_alt','2','5'),
-- Full size images --
('main/best-foods.jpg','','','image_alt','3','2'),
('main/right-calories.jpg','','','image_alt','3','3'),
('main/right-nutrition.jpg','','','image_alt','3','4'),
('main/how-often-to-eat.jpg','','','image_alt','3','5'),
-- BREAKFAST --
-- Thumbnails --
('breakfast/avocado-toast-th.jpg','','','image_alt','2','6'),
('breakfast/oatmeal-th.jpg','','','image_alt','2','7'),
-- Full size images --
('breakfast/avocado-toast.jpg','','','image_alt','3','6'),
('breakfast/oatmeal.jpg','','','image_alt','3','7'),
-- SNACKS --
-- Thumbnails --
('snacks/chocolate-cherry-trail-mix-th.jpg','','','image_alt','2','8'),
('snacks/cheese-and-meat-platter-th.jpg','','','image_alt','2','9'),
-- Full size images --
('snacks/chocolate-cherry-trail-mix.jpg','','','image_alt','3','8'),
('snacks/cheese-and-meat-platter.jpg','','','image_alt','3','9'),
-- DESSERT --
-- Thumbnails --
('desserts/chia-pudding-th.jpg','','','image_alt','2','10'),
('desserts/peanut-butter-energy-balls-th.jpg','','','image_alt','2','11'),
('desserts/chocolate-protein-cookies-th.jpg','','','image_alt','2','12'),
-- Full size images --
('desserts/chia-pudding.jpg','','','image_alt','3','10'),
('desserts/peanut-butter-energy-balls.jpg','','','image_alt','3','11'),
('desserts/chocolate-protein-cookies.jpg','','','image_alt','3','12'),
-- DRINKS --
-- Thumbnails --
('drinks/cold-coffee-th.jpg','','','image_alt','2','13'),
('drinks/strawberry-smoothie-th.jpg','','','image_alt','2','14'),
('drinks/cold-brew-tea-th.jpg','','','image_alt','2','15'),
-- Full size images --
('drinks/cold-coffee.jpg','','','image_alt','3','13'),
('drinks/strawberry-smoothie.jpg','','','image_alt','3','14'),
('drinks/cold-brew-tea.jpg','','','image_alt','3','15'),
-- DINNER --
-- Thumbnails --
('dinner/guacamole-bruschetta-th.jpg','','','image_alt','2','16'),
-- Full size images --
('dinner/guacamole-bruschetta.jpg','','','image_alt','3','16'),
-- LUNCH --
-- Thumbnails --
('lunch/roast-beef-sandwich-th.jpg','','','image_alt','2','17'),
-- Full size images --
('lunch/roast-beef-sandwich.jpg','','','image_alt','3','17');


