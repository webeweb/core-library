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
 * Ad bt bureau distributeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdBtBureauDistributeurTrait {

    /**
     * Ad bt bureau distributeur.
     *
     * @var string
     */
    private $adBtBureauDistributeur;

    /**
     * Get the ad bt bureau distributeur.
     *
     * @return string Returns the ad bt bureau distributeur.
     */
    public function getAdBtBureauDistributeur() {
        return $this->adBtBureauDistributeur;
    }

    /**
     * Set the ad bt bureau distributeur.
     *
     * @param string $adBtBureauDistributeur The ad bt bureau distributeur.
     */
    public function setAdBtBureauDistributeur($adBtBureauDistributeur) {
        $this->adBtBureauDistributeur = $adBtBureauDistributeur;
        return $this;
    }
}
