begin;

-- Add new column to item.
ALTER TABLE item add column image_path TEXT;

-- Insert items into table 'item'
INSERT INTO `item` (`item_name`, `price`, `item_type`, `description`, `flag`)
VALUES
(1, "Pedigree", 35.00, 1, "Pedigree Chicken, Egg and Milk Flavour Puppy Dry Food", 11),
(2, "Whiskas", 100.00, 1, "Delight your cat with the delicious meaty taste of WHISKAS. We have a whole range that taste great and contain all of the nutrients, vitamin, etc", 11),
(3, "Nature Plan", 64.00, 1, "Nature Plan uses Anavarza branded real honey powder specially produced by Sezen Gida in its products.", 11),
(4, "Pet Grooming", 50.00, 2, "Responsibilities can include washing and styling a pet\'s hair, brushing their teeth, trimming their nails, and delivering excellent customer service to pet owners.", 12),
(5, "Pet Services", 35.00, 2, "Veterinary care, ...", 12),
(6, "Pet Food", 100.00, 1, "Multiple choices of food for your dogs and cats", 21),
(7, "Support Tools", 50.00, 1, "Useful tools to support your pet treatment", 21),
(8, "Pet Accessories", 50.00, 1, "Variates of additional accessories for your pets", 21),
(9, "Pet Grooming", 50.00, 2, "Responsibilities can include washing and styling a pet\'s hair, brushing their teeth, trimming their nails, and delivering excellent customer service to pet owners.", 22),
(10, "Pet Training", 100.00, 2, "We train your pet with various approaches with our proffesional pet trainer", 22),
(11, "Pet Hotel", 75.00, 2, "Our pet care specialists can take care of your pets while you’re away", 22),
(12, "Pet Nametag", 25.00, 1, "Name tag make you easier to recognize your pet.", 31),
(13, "Food Dispenser", 5.00, 1, "Food dispenser enchance your pets appetite.", 31),
(14, "Cat Sweater", 10.00, 1, "Cat sweater make your cat stay warm. Also make your cat confident.", 31),
(15, "Cat Litterbox", 15.00, 1, "Keep your cat hygiene. Let\'s buy some for your cat.", 31),
(16, "Pet Nametag", 25.00, 1, "Name tag make you easier to recognize your pet.", 32),
(17, "Cat Sweater", 10.00, 1, "Cat sweater make your cat stay warm. Also make your cat confident.", 32),
(18, "Cat Litterbox", 15.00, 1, "Keep your cat hygiene. Let\'s buy some for your cat.", 32),
(19, "Whiskas", 100.00, 1, "Delight your cat with the delicious meaty taste of WHISKAS. We have a whole rage that taste great and contain all of the nutrients, vitamin, etc", 33),
(20, "Pedigree", 35.00, 1, "Pedigree Chicken, Egg and Milk Flavour Puppy Dry Food", 33),
(21, "Nature Plan", 64.00, 1, "Nature Plan uses Anavarza branded real honey powder specially produced by Sezen Gıda in its products.", 33),
(22, "Waga", 85.00, 1, "Wagg Bunny is a balanced formulation packed full of ingredients. We have included vitamin E to help support a healthy immune system and calcium & vitamin D for strong teeth and bones.", 33);

-- Insert users into table 'user'

INSERT INTO `user` (`user_fullname`, `user_name`, `password`, `user_role`) VALUES
('Erick Julvan', 'erickjulvan', '32200036', 'Admin'),
('Vannes Cristian', 'vanesscristian', '32200037', 'Admin'),
('Kitbert', 'kitbert', '32200038', 'Admin'),
('Eric Wiyanto', 'ericwiyanto', '32200039', 'Admin'),
('Janice Claresta Lingga', 'janiceclarestalingga', '32200041', 'Admin'),
('Budi', 'budi31', 'sibudi31', 'Staff'),
('Udin', 'udin42', 'passwordnyaudin42', 'Staff'),
('Eman', 'eman21', 'inieman21', 'Staff');

commit;
