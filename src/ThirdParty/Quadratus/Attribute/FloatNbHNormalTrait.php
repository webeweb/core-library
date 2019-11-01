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
 * Nb h normal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHNormalTrait {

    /**
     * Nb h normal.
     *
     * @var float
     */
    private $nbHNormal;

    /**
     * Get the nb h normal.
     *
     * @return float Returns the nb h normal.
     */
    public function getNbHNormal() {
        return $this->nbHNormal;
    }

    /**
     * Set the nb h normal.
     *
     * @param float $nbHNormal The nb h normal.
     */
    public function setNbHNormal($nbHNormal) {
        $this->nbHNormal = $nbHNormal;
        return $this;
    }
}
