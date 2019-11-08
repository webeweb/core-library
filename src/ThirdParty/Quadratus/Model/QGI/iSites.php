<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

/**
 * i sites.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class iSites {

    /**
     * Adresse ip.
     *
     * @var string
     */
    private $adresseIp;

    /**
     * Nom site.
     *
     * @var string
     */
    private $nomSite;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the adresse ip.
     *
     * @return string Returns the adresse ip.
     */
    public function getAdresseIp() {
        return $this->adresseIp;
    }

    /**
     * Get the nom site.
     *
     * @return string Returns the nom site.
     */
    public function getNomSite() {
        return $this->nomSite;
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

    /**
     * Set the nom site.
     *
     * @param string $nomSite The nom site.
     */
    public function setNomSite($nomSite) {
        $this->nomSite = $nomSite;
        return $this;
    }
}
