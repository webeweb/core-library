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
 * Nb h dif dus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHDifDusTrait {

    /**
     * Nb h dif dus.
     *
     * @var float
     */
    private $nbHDifDus;

    /**
     * Get the nb h dif dus.
     *
     * @return float Returns the nb h dif dus.
     */
    public function getNbHDifDus() {
        return $this->nbHDifDus;
    }

    /**
     * Set the nb h dif dus.
     *
     * @param float $nbHDifDus The nb h dif dus.
     */
    public function setNbHDifDus($nbHDifDus) {
        $this->nbHDifDus = $nbHDifDus;
        return $this;
    }
}
