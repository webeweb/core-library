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
 * Nb h sup1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHSup1Trait {

    /**
     * Nb h sup1.
     *
     * @var float
     */
    private $nbHSup1;

    /**
     * Get the nb h sup1.
     *
     * @return float Returns the nb h sup1.
     */
    public function getNbHSup1() {
        return $this->nbHSup1;
    }

    /**
     * Set the nb h sup1.
     *
     * @param float $nbHSup1 The nb h sup1.
     */
    public function setNbHSup1($nbHSup1) {
        $this->nbHSup1 = $nbHSup1;
        return $this;
    }
}
