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
 * Utilise pdp quadra trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolUtilisePdpQuadraTrait {

    /**
     * Utilise pdp quadra.
     *
     * @var bool
     */
    private $utilisePdpQuadra;

    /**
     * Get the utilise pdp quadra.
     *
     * @return bool Returns the utilise pdp quadra.
     */
    public function getUtilisePdpQuadra() {
        return $this->utilisePdpQuadra;
    }

    /**
     * Set the utilise pdp quadra.
     *
     * @param bool $utilisePdpQuadra The utilise pdp quadra.
     */
    public function setUtilisePdpQuadra($utilisePdpQuadra) {
        $this->utilisePdpQuadra = $utilisePdpQuadra;
        return $this;
    }
}
