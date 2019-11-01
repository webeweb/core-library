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
 * Nb h sup3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHSup3Trait {

    /**
     * Nb h sup3.
     *
     * @var float
     */
    private $nbHSup3;

    /**
     * Get the nb h sup3.
     *
     * @return float Returns the nb h sup3.
     */
    public function getNbHSup3() {
        return $this->nbHSup3;
    }

    /**
     * Set the nb h sup3.
     *
     * @param float $nbHSup3 The nb h sup3.
     */
    public function setNbHSup3($nbHSup3) {
        $this->nbHSup3 = $nbHSup3;
        return $this;
    }
}
