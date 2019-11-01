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
 * Lieu travail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLieuTravailTrait {

    /**
     * Lieu travail.
     *
     * @var string
     */
    private $lieuTravail;

    /**
     * Get the lieu travail.
     *
     * @return string Returns the lieu travail.
     */
    public function getLieuTravail() {
        return $this->lieuTravail;
    }

    /**
     * Set the lieu travail.
     *
     * @param string $lieuTravail The lieu travail.
     */
    public function setLieuTravail($lieuTravail) {
        $this->lieuTravail = $lieuTravail;
        return $this;
    }
}
