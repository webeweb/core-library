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
 * i sites model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class iSites {

    /**
     * Adresse i p.
     *
     * @var string
     */
    private $adresseIP;

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
     * Get the adresse i p.
     *
     * @return string Returns the adresse i p.
     */
    public function getAdresseIP() {
        return $this->adresseIP;
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
     * Set the adresse i p.
     *
     * @param string $adresseIP The adresse i p.
     * @return iSites Returns this i sites.
     */
    public function setAdresseIP($adresseIP) {
        $this->adresseIP = $adresseIP;
        return $this;
    }

    /**
     * Set the nom site.
     *
     * @param string $nomSite The nom site.
     * @return iSites Returns this i sites.
     */
    public function setNomSite($nomSite) {
        $this->nomSite = $nomSite;
        return $this;
    }
}
