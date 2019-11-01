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
 * Mardi p mfin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeMardiPMfinTrait {

    /**
     * Mardi p mfin.
     *
     * @var DateTime|null
     */
    private $mardiPMfin;

    /**
     * Get the mardi p mfin.
     *
     * @return DateTime|null Returns the mardi p mfin.
     */
    public function getMardiPMfin() {
        return $this->mardiPMfin;
    }

    /**
     * Set the mardi p mfin.
     *
     * @param DateTime|null $mardiPMfin The mardi p mfin.
     */
    public function setMardiPMfin(DateTime $mardiPMfin = null) {
        $this->mardiPMfin = $mardiPMfin;
        return $this;
    }
}
