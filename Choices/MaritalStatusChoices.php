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
 * Marital status choices.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Choices
 * @final
 */
final class MaritalStatusChoices implements MaritalStatusChoicesInterface {

    /**
     * Get the choices.
     *
     * @return array Returns the choices.
     */
    public static function getChoices() {
        return [
            self::MARITAL_STATUS_EMPTY    => "choices.marital-status.empty",
            self::MARITAL_STATUS_SINGLE   => "choices.marital-status.single",
            self::MARITAL_STATUS_PACS     => "choices.marital-status.pacs",
            self::MARITAL_STATUS_MARRIED  => "choices.marital-status.married",
            self::MARITAL_STATUS_WIDOWER  => "choices.marital-status.widower",
            self::MARITAL_STATUS_DIVORCED => "choices.marital-status.divorced",
        ];
    }

}
