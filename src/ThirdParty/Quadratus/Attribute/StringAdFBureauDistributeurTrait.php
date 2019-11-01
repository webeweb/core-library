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
 * Ad f bureau distributeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdFBureauDistributeurTrait {

    /**
     * Ad f bureau distributeur.
     *
     * @var string
     */
    private $adFBureauDistributeur;

    /**
     * Get the ad f bureau distributeur.
     *
     * @return string Returns the ad f bureau distributeur.
     */
    public function getAdFBureauDistributeur() {
        return $this->adFBureauDistributeur;
    }

    /**
     * Set the ad f bureau distributeur.
     *
     * @param string $adFBureauDistributeur The ad f bureau distributeur.
     */
    public function setAdFBureauDistributeur($adFBureauDistributeur) {
        $this->adFBureauDistributeur = $adFBureauDistributeur;
        return $this;
    }
}
