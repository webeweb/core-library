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
 * Caisse indemcp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCaisseIndemcpTrait {

    /**
     * Caisse indemcp.
     *
     * @var string
     */
    private $caisseIndemcp;

    /**
     * Get the caisse indemcp.
     *
     * @return string Returns the caisse indemcp.
     */
    public function getCaisseIndemcp() {
        return $this->caisseIndemcp;
    }

    /**
     * Set the caisse indemcp.
     *
     * @param string $caisseIndemcp The caisse indemcp.
     */
    public function setCaisseIndemcp($caisseIndemcp) {
        $this->caisseIndemcp = $caisseIndemcp;
        return $this;
    }
}
