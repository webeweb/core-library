<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

use DateTime;

/**
 * Suspension date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeSuspensionDateTrait {

    /**
     * Suspension date.
     *
     * @var DateTime|null
     */
    private $suspensionDate;

    /**
     * Get the suspension date.
     *
     * @return DateTime|null Returns the suspension date.
     */
    public function getSuspensionDate() {
        return $this->suspensionDate;
    }

    /**
     * Set the suspension date.
     *
     * @param DateTime|null $suspensionDate The suspension date.
     */
    public function setSuspensionDate(DateTime $suspensionDate = null) {
        $this->suspensionDate = $suspensionDate;
        return $this;
    }
}
