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
 * Nom suite2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomSuite2Trait {

    /**
     * Nom suite2.
     *
     * @var string
     */
    private $nomSuite2;

    /**
     * Get the nom suite2.
     *
     * @return string Returns the nom suite2.
     */
    public function getNomSuite2() {
        return $this->nomSuite2;
    }

    /**
     * Set the nom suite2.
     *
     * @param string $nomSuite2 The nom suite2.
     */
    public function setNomSuite2($nomSuite2) {
        $this->nomSuite2 = $nomSuite2;
        return $this;
    }
}
