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
 * Prov cp cpt capcp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringProvCpCptCapcpTrait {

    /**
     * Prov cp cpt capcp.
     *
     * @var string
     */
    private $provCpCptCapcp;

    /**
     * Get the prov cp cpt capcp.
     *
     * @return string Returns the prov cp cpt capcp.
     */
    public function getProvCpCptCapcp() {
        return $this->provCpCptCapcp;
    }

    /**
     * Set the prov cp cpt capcp.
     *
     * @param string $provCpCptCapcp The prov cp cpt capcp.
     */
    public function setProvCpCptCapcp($provCpCptCapcp) {
        $this->provCpCptCapcp = $provCpCptCapcp;
        return $this;
    }
}
