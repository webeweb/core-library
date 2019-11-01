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
 * Cb en francs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCbEnFrancsTrait {

    /**
     * Cb en francs.
     *
     * @var bool
     */
    private $cbEnFrancs;

    /**
     * Get the cb en francs.
     *
     * @return bool Returns the cb en francs.
     */
    public function getCbEnFrancs() {
        return $this->cbEnFrancs;
    }

    /**
     * Set the cb en francs.
     *
     * @param bool $cbEnFrancs The cb en francs.
     */
    public function setCbEnFrancs($cbEnFrancs) {
        $this->cbEnFrancs = $cbEnFrancs;
        return $this;
    }
}
