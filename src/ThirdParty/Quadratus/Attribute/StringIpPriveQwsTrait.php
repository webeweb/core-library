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
 * Ip prive qws trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIpPriveQwsTrait {

    /**
     * Ip prive qws.
     *
     * @var string
     */
    private $ipPriveQws;

    /**
     * Get the ip prive qws.
     *
     * @return string Returns the ip prive qws.
     */
    public function getIpPriveQws() {
        return $this->ipPriveQws;
    }

    /**
     * Set the ip prive qws.
     *
     * @param string $ipPriveQws The ip prive qws.
     */
    public function setIpPriveQws($ipPriveQws) {
        $this->ipPriveQws = $ipPriveQws;
        return $this;
    }
}
