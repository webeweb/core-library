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
 * Adresse ip trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdresseIpTrait {

    /**
     * Adresse ip.
     *
     * @var string
     */
    private $adresseIp;

    /**
     * Get the adresse ip.
     *
     * @return string Returns the adresse ip.
     */
    public function getAdresseIp() {
        return $this->adresseIp;
    }

    /**
     * Set the adresse ip.
     *
     * @param string $adresseIp The adresse ip.
     */
    public function setAdresseIp($adresseIp) {
        $this->adresseIp = $adresseIp;
        return $this;
    }
}
