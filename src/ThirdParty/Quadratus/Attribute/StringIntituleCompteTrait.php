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
 * Intitule compte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIntituleCompteTrait {

    /**
     * Intitule compte.
     *
     * @var string
     */
    private $intituleCompte;

    /**
     * Get the intitule compte.
     *
     * @return string Returns the intitule compte.
     */
    public function getIntituleCompte() {
        return $this->intituleCompte;
    }

    /**
     * Set the intitule compte.
     *
     * @param string $intituleCompte The intitule compte.
     */
    public function setIntituleCompte($intituleCompte) {
        $this->intituleCompte = $intituleCompte;
        return $this;
    }
}
