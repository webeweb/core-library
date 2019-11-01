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
 * Date fin cospar trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinCosparTrait {

    /**
     * Date fin cospar.
     *
     * @var DateTime|null
     */
    private $dateFinCospar;

    /**
     * Get the date fin cospar.
     *
     * @return DateTime|null Returns the date fin cospar.
     */
    public function getDateFinCospar() {
        return $this->dateFinCospar;
    }

    /**
     * Set the date fin cospar.
     *
     * @param DateTime|null $dateFinCospar The date fin cospar.
     */
    public function setDateFinCospar(DateTime $dateFinCospar = null) {
        $this->dateFinCospar = $dateFinCospar;
        return $this;
    }
}
