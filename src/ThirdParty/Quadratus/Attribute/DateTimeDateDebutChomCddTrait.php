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
 * Date debut chom cdd trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDebutChomCddTrait {

    /**
     * Date debut chom cdd.
     *
     * @var DateTime|null
     */
    private $dateDebutChomCdd;

    /**
     * Get the date debut chom cdd.
     *
     * @return DateTime|null Returns the date debut chom cdd.
     */
    public function getDateDebutChomCdd() {
        return $this->dateDebutChomCdd;
    }

    /**
     * Set the date debut chom cdd.
     *
     * @param DateTime|null $dateDebutChomCdd The date debut chom cdd.
     */
    public function setDateDebutChomCdd(DateTime $dateDebutChomCdd = null) {
        $this->dateDebutChomCdd = $dateDebutChomCdd;
        return $this;
    }
}
