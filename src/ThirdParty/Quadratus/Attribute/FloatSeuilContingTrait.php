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
 * Seuil conting trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSeuilContingTrait {

    /**
     * Seuil conting.
     *
     * @var float
     */
    private $seuilConting;

    /**
     * Get the seuil conting.
     *
     * @return float Returns the seuil conting.
     */
    public function getSeuilConting() {
        return $this->seuilConting;
    }

    /**
     * Set the seuil conting.
     *
     * @param float $seuilConting The seuil conting.
     */
    public function setSeuilConting($seuilConting) {
        $this->seuilConting = $seuilConting;
        return $this;
    }
}
