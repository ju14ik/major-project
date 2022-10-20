-- Data for `images` table --

TRUNCATE TABLE `images`;

INSERT INTO `images`(`image_file_name`, `image_description`, `image_href`, `image_alt`, `imagetype_id`, `content_id`) 
VALUES 
-- LOGO--
('logo.png',NULL,'index.php','Hedgehog holding a red apple','1',NULL),
-- HOME PAGE IMAGE --
('main/main.jpg',NULL,NULL,'Twho people sitting on a hammock with food cooking on a fire in front of them','5',NULL), 
-- HOME PAGE ICONS --
('icons/breakfast.png','Breakfast','content.php?pagename=breakfast','Icon of breakfast bowl','4',NULL),
('icons/lunch.png','Lunch','content.php?pagename=lunch','Icon of lunch bowl','4',NULL),
('icons/dinner.png','Dinner','content.php?pagename=dinner','Icon of a chicken drumstick','4',NULL),
('icons/snacks.png','Snacks','content.php?pagename=snacks','Icon of three hazelnuts','4',NULL),
('icons/dessert.png','Dessert','content.php?pagename=dessert','Icon of muffin','4',NULL),
('icons/drinks.png','Drinks','content.php?pagename=drinks','Icon of a cup of tea','4',NULL),
-- HOME PAGE CONTENT --
-- Thumbnails --
('main/best-foods-th.jpg','','','Wooden cup with cranberries','2','2'),
('main/right-calories-th.jpg','','','Smart watch counting calories','2','3'),
('main/right-nutrition-th.jpg','','','Two egg toasts inside a pan','2','4'),
('main/how-often-to-eat-th.jpg','','','Man preparing food with mountains and clouds behind him','2','5'),
-- Full size images --
('main/best-foods.jpg','','','Wooden cup with cranberries','3','2'),
('main/right-calories.jpg','','','Smart watch counting calories','3','3'),
('main/right-nutrition.jpg','','','Two egg toasts inside a pan','3','4'),
('main/how-often-to-eat.jpg','','','Man preparing food with mountains and clouds behind him','3','5'),
-- BREAKFAST --
-- Thumbnails --
('breakfast/oatmeal-th.jpg','','','Bowl of oatmeal with coconut flakes, passion fruit, apple, almonds on top','2','6'),
('breakfast/avocado-toast-th.jpg','','','Toasts with avocado, eggs, tomatoes, feta cheese','2','7'),
('breakfast/quinoa-breakfast-bar.jpg','','','Quinoa breakfast bar','2','8'),
-- Full size images --
('breakfast/oatmeal.jpg','','','Bowl of oatmeal with coconut flakes, passion fruit, apple, almonds on top','3','6'),
('breakfast/avocado-toast.jpg','','','Toasts with avocado, eggs, tomatoes, feta cheese','3','7'),
('breakfast/quinoa-breakfast-bar-th.jpg','','','Quinoa breakfast bar','2','8'),
-- SNACKS --
-- Thumbnails --
('snacks/chocolate-cherry-trail-mix-th.jpg','','','Mix of walnuts, dried cherries, dark chocolate chunks, pumpkin seeds, dried blueberies','2','9'),
('snacks/cheese-platter-th.jpg','','','Slices of cheese, pear and olives','2','10'),
('snacks/chickpeas-th.jpg','','','TODO','2','11'),
-- Full size images --
('snacks/chocolate-cherry-trail-mix.jpg','','','Mix of walnuts, dried cherries, dark chocolate chunks, pumpkin seeds, dried blueberies','3','9'),
('snacks/cheese-platter.jpg','','','Slices of cheese, pear and olives','3','10'),
('snacks/chickpeas.jpg','','','TODO','3','11'),
-- DESSERT --
-- Thumbnails --
('desserts/chia-pudding-th.jpg','','','Glass of chia pudding with berries on top','2','12'),
('desserts/peanut-butter-energy-balls-th.jpg','','','Peanut butter energy balls insite a white wooden tray with flowers around','2','13'),
('desserts/chocolate-protein-cookies-th.jpg','','','Chocolate protein cookies stacked on top of eachother','2','14'),
-- Full size images --
('desserts/chia-pudding.jpg','','','Glass of chia pudding with berries on top','3','12'),
('desserts/peanut-butter-energy-balls.jpg','','','Peanut butter energy balls insite a white wooden tray with flowers around','3','13'),
('desserts/chocolate-protein-cookies.jpg','','','Chocolate protein cookies stacked on top of eachother','3','14'),
-- DRINKS --
-- Thumbnails --
('drinks/cold-coffee-th.jpg','','','Spoon with cold coffee powder and a metal cup','2','15'),
('drinks/strawberry-smoothie-th.jpg','','','Strawberry smoothie inside a clear plastic cup','2','16'),
('drinks/cold-brew-tea-th.jpg','','','Jar of cold brew tea with green leaves','2','17'),
-- Full size images --
('drinks/cold-coffee.jpg','','','Spoon with cold coffee powder and a metal cup','3','15'),
('drinks/strawberry-smoothie.jpg','','','Strawberry smoothie inside a clear plastic cup','3','16'),
('drinks/cold-brew-tea.jpg','','','Jar of cold brew tea with green leaves','3','17'),
-- DINNER --
-- Thumbnails --
('dinner/guacamole-bruschetta-th.jpg','','','Guacamole bruschetta with sesame seeds on top','2','18'),
-- Full size images --
('dinner/guacamole-bruschetta.jpg','','','Guacamole bruschetta with sesame seeds on top','3','18'),
-- LUNCH --
-- Thumbnails --
('lunch/chicken-wrap-th.jpg','','','Roast beef sandwich with salad and cheese','2','19'),
('lunch/roast-beef-sandwich-th.jpg','','','Roast beef sandwich with salad and cheese','2','20'),
-- Full size images --
('lunch/chicken-wrap.jpg','','','Roast beef sandwich with salad and cheese','3','19'),
('lunch/roast-beef-sandwich.jpg','','','Roast beef sandwich with salad and cheese','3','20');


