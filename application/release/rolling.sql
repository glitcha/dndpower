ALTER TABLE `character` 
	ADD COLUMN `hp_current` INT NULL AFTER `image`,
	ADD COLUMN `gold` INT NULL AFTER `hp_current`;
