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
 * Lieu nom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLieuNomTrait {

    /**
     * Lieu nom.
     *
     * @var string
     */
    private $lieuNom;

    /**
     * Get the lieu nom.
     *
     * @return string Returns the lieu nom.
     */
    public function getLieuNom() {
        return $this->lieuNom;
    }

    /**
     * Set the lieu nom.
     *
     * @param string $lieuNom The lieu nom.
     */
    public function setLieuNom($lieuNom) {
        $this->lieuNom = $lieuNom;
        return $this;
    }
}
