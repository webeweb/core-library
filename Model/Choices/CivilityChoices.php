<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Choices;

/**
 * Civility choices.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Choices
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
            self::CIVILITY_EMPTY  => "choices.civility.empty",
            self::CIVILITY_MISS   => "choices.civility.miss",
            self::CIVILITY_MRS    => "choices.civility.mrs",
            self::CIVILITY_MISTER => "choices.civility.mister",
        ];
    }

}
