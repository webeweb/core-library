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
 * Lieu naissance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLieuNaissanceTrait {

    /**
     * Lieu naissance.
     *
     * @var string
     */
    private $lieuNaissance;

    /**
     * Get the lieu naissance.
     *
     * @return string Returns the lieu naissance.
     */
    public function getLieuNaissance() {
        return $this->lieuNaissance;
    }

    /**
     * Set the lieu naissance.
     *
     * @param string $lieuNaissance The lieu naissance.
     */
    public function setLieuNaissance($lieuNaissance) {
        $this->lieuNaissance = $lieuNaissance;
        return $this;
    }
}
