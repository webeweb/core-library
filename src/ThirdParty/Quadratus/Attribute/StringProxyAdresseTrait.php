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
 * Proxy adresse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringProxyAdresseTrait {

    /**
     * Proxy adresse.
     *
     * @var string
     */
    private $proxyAdresse;

    /**
     * Get the proxy adresse.
     *
     * @return string Returns the proxy adresse.
     */
    public function getProxyAdresse() {
        return $this->proxyAdresse;
    }

    /**
     * Set the proxy adresse.
     *
     * @param string $proxyAdresse The proxy adresse.
     */
    public function setProxyAdresse($proxyAdresse) {
        $this->proxyAdresse = $proxyAdresse;
        return $this;
    }
}
