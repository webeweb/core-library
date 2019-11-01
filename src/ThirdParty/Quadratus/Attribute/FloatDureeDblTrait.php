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
 * Duree dbl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeDblTrait {

    /**
     * Duree dbl.
     *
     * @var float
     */
    private $dureeDbl;

    /**
     * Get the duree dbl.
     *
     * @return float Returns the duree dbl.
     */
    public function getDureeDbl() {
        return $this->dureeDbl;
    }

    /**
     * Set the duree dbl.
     *
     * @param float $dureeDbl The duree dbl.
     */
    public function setDureeDbl($dureeDbl) {
        $this->dureeDbl = $dureeDbl;
        return $this;
    }
}
