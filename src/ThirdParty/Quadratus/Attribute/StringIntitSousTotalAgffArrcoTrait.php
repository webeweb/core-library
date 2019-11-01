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

/**
 * Intit sous total agff arrco trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIntitSousTotalAgffArrcoTrait {

    /**
     * Intit sous total agff arrco.
     *
     * @var string
     */
    private $intitSousTotalAgffArrco;

    /**
     * Get the intit sous total agff arrco.
     *
     * @return string Returns the intit sous total agff arrco.
     */
    public function getIntitSousTotalAgffArrco() {
        return $this->intitSousTotalAgffArrco;
    }

    /**
     * Set the intit sous total agff arrco.
     *
     * @param string $intitSousTotalAgffArrco The intit sous total agff arrco.
     */
    public function setIntitSousTotalAgffArrco($intitSousTotalAgffArrco) {
        $this->intitSousTotalAgffArrco = $intitSousTotalAgffArrco;
        return $this;
    }
}
