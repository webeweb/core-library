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
 * Utilise pdp quadra2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolUtilisePdpQuadra2Trait {

    /**
     * Utilise pdp quadra2.
     *
     * @var bool
     */
    private $utilisePdpQuadra2;

    /**
     * Get the utilise pdp quadra2.
     *
     * @return bool Returns the utilise pdp quadra2.
     */
    public function getUtilisePdpQuadra2() {
        return $this->utilisePdpQuadra2;
    }

    /**
     * Set the utilise pdp quadra2.
     *
     * @param bool $utilisePdpQuadra2 The utilise pdp quadra2.
     */
    public function setUtilisePdpQuadra2($utilisePdpQuadra2) {
        $this->utilisePdpQuadra2 = $utilisePdpQuadra2;
        return $this;
    }
}
