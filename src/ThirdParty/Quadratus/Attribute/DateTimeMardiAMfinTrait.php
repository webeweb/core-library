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
 * Mardi a mfin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeMardiAMfinTrait {

    /**
     * Mardi a mfin.
     *
     * @var DateTime|null
     */
    private $mardiAMfin;

    /**
     * Get the mardi a mfin.
     *
     * @return DateTime|null Returns the mardi a mfin.
     */
    public function getMardiAMfin() {
        return $this->mardiAMfin;
    }

    /**
     * Set the mardi a mfin.
     *
     * @param DateTime|null $mardiAMfin The mardi a mfin.
     */
    public function setMardiAMfin(DateTime $mardiAMfin = null) {
        $this->mardiAMfin = $mardiAMfin;
        return $this;
    }
}
