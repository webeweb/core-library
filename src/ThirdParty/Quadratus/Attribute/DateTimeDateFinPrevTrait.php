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
 * Date fin prev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinPrevTrait {

    /**
     * Date fin prev.
     *
     * @var DateTime|null
     */
    private $dateFinPrev;

    /**
     * Get the date fin prev.
     *
     * @return DateTime|null Returns the date fin prev.
     */
    public function getDateFinPrev() {
        return $this->dateFinPrev;
    }

    /**
     * Set the date fin prev.
     *
     * @param DateTime|null $dateFinPrev The date fin prev.
     */
    public function setDateFinPrev(DateTime $dateFinPrev = null) {
        $this->dateFinPrev = $dateFinPrev;
        return $this;
    }
}
