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
 * Prov mini trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatProvMiniTrait {

    /**
     * Prov mini.
     *
     * @var float
     */
    private $provMini;

    /**
     * Get the prov mini.
     *
     * @return float Returns the prov mini.
     */
    public function getProvMini() {
        return $this->provMini;
    }

    /**
     * Set the prov mini.
     *
     * @param float $provMini The prov mini.
     */
    public function setProvMini($provMini) {
        $this->provMini = $provMini;
        return $this;
    }
}
