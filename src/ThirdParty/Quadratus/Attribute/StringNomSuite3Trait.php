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
 * Nom suite3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomSuite3Trait {

    /**
     * Nom suite3.
     *
     * @var string
     */
    private $nomSuite3;

    /**
     * Get the nom suite3.
     *
     * @return string Returns the nom suite3.
     */
    public function getNomSuite3() {
        return $this->nomSuite3;
    }

    /**
     * Set the nom suite3.
     *
     * @param string $nomSuite3 The nom suite3.
     */
    public function setNomSuite3($nomSuite3) {
        $this->nomSuite3 = $nomSuite3;
        return $this;
    }
}
