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
 * Nom ville2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomVille2Trait {

    /**
     * Nom ville2.
     *
     * @var string
     */
    private $nomVille2;

    /**
     * Get the nom ville2.
     *
     * @return string Returns the nom ville2.
     */
    public function getNomVille2() {
        return $this->nomVille2;
    }

    /**
     * Set the nom ville2.
     *
     * @param string $nomVille2 The nom ville2.
     */
    public function setNomVille2($nomVille2) {
        $this->nomVille2 = $nomVille2;
        return $this;
    }
}
