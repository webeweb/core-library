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
 * Nb h sup4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHSup4Trait {

    /**
     * Nb h sup4.
     *
     * @var float
     */
    private $nbHSup4;

    /**
     * Get the nb h sup4.
     *
     * @return float Returns the nb h sup4.
     */
    public function getNbHSup4() {
        return $this->nbHSup4;
    }

    /**
     * Set the nb h sup4.
     *
     * @param float $nbHSup4 The nb h sup4.
     */
    public function setNbHSup4($nbHSup4) {
        $this->nbHSup4 = $nbHSup4;
        return $this;
    }
}
