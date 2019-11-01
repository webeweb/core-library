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
 * Date active trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateActiveTrait {

    /**
     * Date active.
     *
     * @var DateTime|null
     */
    private $dateActive;

    /**
     * Get the date active.
     *
     * @return DateTime|null Returns the date active.
     */
    public function getDateActive() {
        return $this->dateActive;
    }

    /**
     * Set the date active.
     *
     * @param DateTime|null $dateActive The date active.
     */
    public function setDateActive(DateTime $dateActive = null) {
        $this->dateActive = $dateActive;
        return $this;
    }
}
