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
 * Proxy actif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolProxyActifTrait {

    /**
     * Proxy actif.
     *
     * @var bool
     */
    private $proxyActif;

    /**
     * Get the proxy actif.
     *
     * @return bool Returns the proxy actif.
     */
    public function getProxyActif() {
        return $this->proxyActif;
    }

    /**
     * Set the proxy actif.
     *
     * @param bool $proxyActif The proxy actif.
     */
    public function setProxyActif($proxyActif) {
        $this->proxyActif = $proxyActif;
        return $this;
    }
}
