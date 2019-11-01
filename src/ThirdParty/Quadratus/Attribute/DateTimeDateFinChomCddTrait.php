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
 * Date fin chom cdd trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinChomCddTrait {

    /**
     * Date fin chom cdd.
     *
     * @var DateTime|null
     */
    private $dateFinChomCdd;

    /**
     * Get the date fin chom cdd.
     *
     * @return DateTime|null Returns the date fin chom cdd.
     */
    public function getDateFinChomCdd() {
        return $this->dateFinChomCdd;
    }

    /**
     * Set the date fin chom cdd.
     *
     * @param DateTime|null $dateFinChomCdd The date fin chom cdd.
     */
    public function setDateFinChomCdd(DateTime $dateFinChomCdd = null) {
        $this->dateFinChomCdd = $dateFinChomCdd;
        return $this;
    }
}
