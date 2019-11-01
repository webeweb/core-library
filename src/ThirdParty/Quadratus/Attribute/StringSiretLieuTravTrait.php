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
 * Siret lieu trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSiretLieuTravTrait {

    /**
     * Siret lieu trav.
     *
     * @var string
     */
    private $siretLieuTrav;

    /**
     * Get the siret lieu trav.
     *
     * @return string Returns the siret lieu trav.
     */
    public function getSiretLieuTrav() {
        return $this->siretLieuTrav;
    }

    /**
     * Set the siret lieu trav.
     *
     * @param string $siretLieuTrav The siret lieu trav.
     */
    public function setSiretLieuTrav($siretLieuTrav) {
        $this->siretLieuTrav = $siretLieuTrav;
        return $this;
    }
}
