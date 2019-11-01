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
 * Date accident trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAccidentTrait {

    /**
     * Date accident.
     *
     * @var DateTime|null
     */
    private $dateAccident;

    /**
     * Get the date accident.
     *
     * @return DateTime|null Returns the date accident.
     */
    public function getDateAccident() {
        return $this->dateAccident;
    }

    /**
     * Set the date accident.
     *
     * @param DateTime|null $dateAccident The date accident.
     */
    public function setDateAccident(DateTime $dateAccident = null) {
        $this->dateAccident = $dateAccident;
        return $this;
    }
}
