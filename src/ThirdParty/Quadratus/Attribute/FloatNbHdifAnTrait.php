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
 * Nb hdif an trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHdifAnTrait {

    /**
     * Nb hdif an.
     *
     * @var float
     */
    private $nbHdifAn;

    /**
     * Get the nb hdif an.
     *
     * @return float Returns the nb hdif an.
     */
    public function getNbHdifAn() {
        return $this->nbHdifAn;
    }

    /**
     * Set the nb hdif an.
     *
     * @param float $nbHdifAn The nb hdif an.
     */
    public function setNbHdifAn($nbHdifAn) {
        $this->nbHdifAn = $nbHdifAn;
        return $this;
    }
}
