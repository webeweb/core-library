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
 * Ad int bureau distributeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdIntBureauDistributeurTrait {

    /**
     * Ad int bureau distributeur.
     *
     * @var string
     */
    private $adIntBureauDistributeur;

    /**
     * Get the ad int bureau distributeur.
     *
     * @return string Returns the ad int bureau distributeur.
     */
    public function getAdIntBureauDistributeur() {
        return $this->adIntBureauDistributeur;
    }

    /**
     * Set the ad int bureau distributeur.
     *
     * @param string $adIntBureauDistributeur The ad int bureau distributeur.
     */
    public function setAdIntBureauDistributeur($adIntBureauDistributeur) {
        $this->adIntBureauDistributeur = $adIntBureauDistributeur;
        return $this;
    }
}
