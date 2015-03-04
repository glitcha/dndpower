UPDATE power SET name = REPLACE(name, 'â€œ', '“');
UPDATE power SET name = REPLACE(name, 'â€', '”');
UPDATE power SET name = REPLACE(name, '’', '’');
UPDATE power SET name = REPLACE(name, 'â€˜', '‘');
UPDATE power SET name = REPLACE(name, 'â€”', '–');
UPDATE power SET name = REPLACE(name, 'â€“', '—');
UPDATE power SET name = REPLACE(name, 'â€¢', '-');
UPDATE power SET name = REPLACE(name, 'â€¦', '…');

UPDATE power SET flavor_text = REPLACE(flavor_text, 'â€œ', '“');
UPDATE power SET flavor_text = REPLACE(flavor_text, 'â€', '”');
UPDATE power SET flavor_text = REPLACE(flavor_text, 'â€™', '’');
UPDATE power SET flavor_text = REPLACE(flavor_text, 'â€˜', '‘');
UPDATE power SET flavor_text = REPLACE(flavor_text, 'â€”', '–');
UPDATE power SET flavor_text = REPLACE(flavor_text, 'â€“', '—');
UPDATE power SET flavor_text = REPLACE(flavor_text, 'â€¢', '-');
UPDATE power SET flavor_text = REPLACE(flavor_text, 'â€¦', '…');

UPDATE power SET rule_text = REPLACE(rule_text, 'â€œ', '“');
UPDATE power SET rule_text = REPLACE(rule_text, 'â€', '”');
UPDATE power SET rule_text = REPLACE(rule_text, 'â€™', '’');
UPDATE power SET rule_text = REPLACE(rule_text, 'â€˜', '‘');
UPDATE power SET rule_text = REPLACE(rule_text, 'â€”', '–');
UPDATE power SET rule_text = REPLACE(rule_text, 'â€“', '—');
UPDATE power SET rule_text = REPLACE(rule_text, 'â€¢', '-');
UPDATE power SET rule_text = REPLACE(rule_text, 'â€¦', '…');