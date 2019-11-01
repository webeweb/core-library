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
 * Nb h sup5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHSup5Trait {

    /**
     * Nb h sup5.
     *
     * @var float
     */
    private $nbHSup5;

    /**
     * Get the nb h sup5.
     *
     * @return float Returns the nb h sup5.
     */
    public function getNbHSup5() {
        return $this->nbHSup5;
    }

    /**
     * Set the nb h sup5.
     *
     * @param float $nbHSup5 The nb h sup5.
     */
    public function setNbHSup5($nbHSup5) {
        $this->nbHSup5 = $nbHSup5;
        return $this;
    }
}
