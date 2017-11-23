<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Choices;

/**
 * Civility choices.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Choices
 * @final
 */
final class CivilityChoices implements CivilityChoicesInterface {

	/**
	 * Get the choices.
	 *
	 * @return array Returns the choices.
	 */
	public static function getChoices() {
		return [
			self::CIVILITY_EMPTY	 => "choices.civility.empty",
			self::CIVILITY_MISS		 => "choices.civility.miss",
			self::CIVILITY_MRS		 => "choices.civility.mrs",
			self::CIVILITY_MISTER	 => "choices.civility.mister",
		];
	}

}
