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
 * Lieu bureau distributeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLieuBureauDistributeurTrait {

    /**
     * Lieu bureau distributeur.
     *
     * @var string
     */
    private $lieuBureauDistributeur;

    /**
     * Get the lieu bureau distributeur.
     *
     * @return string Returns the lieu bureau distributeur.
     */
    public function getLieuBureauDistributeur() {
        return $this->lieuBureauDistributeur;
    }

    /**
     * Set the lieu bureau distributeur.
     *
     * @param string $lieuBureauDistributeur The lieu bureau distributeur.
     */
    public function setLieuBureauDistributeur($lieuBureauDistributeur) {
        $this->lieuBureauDistributeur = $lieuBureauDistributeur;
        return $this;
    }
}
