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
 * Proxy port trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntProxyPortTrait {

    /**
     * Proxy port.
     *
     * @var int
     */
    private $proxyPort;

    /**
     * Get the proxy port.
     *
     * @return int Returns the proxy port.
     */
    public function getProxyPort() {
        return $this->proxyPort;
    }

    /**
     * Set the proxy port.
     *
     * @param int $proxyPort The proxy port.
     */
    public function setProxyPort($proxyPort) {
        $this->proxyPort = $proxyPort;
        return $this;
    }
}
