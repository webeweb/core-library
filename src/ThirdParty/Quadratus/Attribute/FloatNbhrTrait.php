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
 * Nbhr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbhrTrait {

    /**
     * Nbhr.
     *
     * @var float
     */
    private $nbhr;

    /**
     * Get the nbhr.
     *
     * @return float Returns the nbhr.
     */
    public function getNbhr() {
        return $this->nbhr;
    }

    /**
     * Set the nbhr.
     *
     * @param float $nbhr The nbhr.
     */
    public function setNbhr($nbhr) {
        $this->nbhr = $nbhr;
        return $this;
    }
}
