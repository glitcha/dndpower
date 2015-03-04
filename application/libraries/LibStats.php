<?php

class LibStats extends LibAbstract {

	public function getReflex($character) {

		$out = array(
			'working' => array(),
			'total' => 0,
			'description' => ''
		);

		$attr = ($character->dex > $character->int) ? 'dex' : 'int';

		$out['working'][] = $this->addWorking('10', 10);
		$out['working'][] = $this->addWorking('1/2 Lvl', $this->getHalfLevel($character));
		$out['working'][] = $this->addWorking($attr, $this->getAbilityModifier($character->$attr));
		$out['working'][] = $this->addWorking('Misc', $character->reflex_bonus);

		$out['total'] = $out['working'][0]['value'] + $out['working'][1]['value'] + $out['working'][2]['value'];
		$out['description'] = $this->concatDescription($out['working']);

		return $out;
	}

	public function getFortitude($character) {

		$out = array(
			'working' => array(),
			'total' => 0,
			'description' => ''
		);

		$attr = ($character->dex > $character->int) ? 'str' : 'con';

		$out['working'][] = $this->addWorking('10', 10);
		$out['working'][] = $this->addWorking('1/2 Lvl', $this->getHalfLevel($character));
		$out['working'][] = $this->addWorking($attr, $this->getAbilityModifier($character->$attr));
		$out['working'][] = $this->addWorking('Misc', $character->fortitude_bonus);

		$out['total'] = $out['working'][0]['value'] + $out['working'][1]['value'] + $out['working'][2]['value'];
		$out['description'] = $this->concatDescription($out['working']);

		return $out;
	}

	public function getWill($character) {

		$out = array(
			'working' => array(),
			'total' => 0,
			'description' => ''
		);

		$attr = ($character->wis > $character->cha) ? 'wis' : 'cha';

		$out['working'][] = $this->addWorking('10', 10);
		$out['working'][] = $this->addWorking('1/2 Lvl', $this->getHalfLevel($character));
		$out['working'][] = $this->addWorking($attr, $this->getAbilityModifier($character->$attr));
		$out['working'][] = $this->addWorking('Misc', $character->will_bonus);

		$out['total'] = $out['working'][0]['value'] + $out['working'][1]['value'] + $out['working'][2]['value'];
		$out['description'] = $this->concatDescription($out['working']);

		return $out;
	}

	public function getAC($character) {

		$out = array(
			'working' => array(),
			'total' => 0,
			'description' => ''
		);

		$attr = ($character->dex > $character->int) ? 'dex' : 'int';

		$out['working'][] = $this->addWorking('10', 10);
		$out['working'][] = $this->addWorking('1/2 Lvl', $this->getHalfLevel($character));
		$out['working'][] = $this->addWorking($attr, $this->getAbilityModifier($character->$attr));
		$out['working'][] = $this->addWorking('Misc', $character->ac_bonus);

		$out['total'] = $out['working'][0]['value'] + $out['working'][1]['value'] + $out['working'][2]['value'];
		$out['description'] = $this->concatDescription($out['working']);

		return $out;
	}

	private function concatDescription($working) {

		$out = ' = ';
		foreach ($working as $item) {
			$out .= $item['description'].':'.$item['value'].' | ';
		}		
		return $out;
	}

	private function addWorking($description, $value) {
		return compact('description', 'value');
	}

	public function getHalfLevel($character) {
		return (int) floor($character->level / 2);
	}

	public function loadSkillBonuses($skills, $character) {
		foreach ($skills as $skill) {
			$bonus = 0;
			$attr = $skill->attribute;
			$bonus += $this->getAbilityModifier($character->$attr);
			if ($skill->cs_id !== null) 
				$bonus += 5;	
			$skill->bonus = $bonus;
		}

		return $skills;
	}

	public function getAbilityModifier($attr) {
		return (int) floor(($attr - 10) / 2);
	}

	public function populate(&$character) {
		$character->reflex = $this->getReflex($character);
		$character->fortitude = $this->getFortitude($character);
		$character->will = $this->getWill($character);
		$character->ac = $this->getAC($character);
		$character->str_bonus = $this->getAbilityModifier($character->str);
		$character->con_bonus = $this->getAbilityModifier($character->con);
		$character->dex_bonus = $this->getAbilityModifier($character->dex);
		$character->int_bonus = $this->getAbilityModifier($character->int);
		$character->wis_bonus = $this->getAbilityModifier($character->wis);
		$character->cha_bonus = $this->getAbilityModifier($character->cha);
	}
}