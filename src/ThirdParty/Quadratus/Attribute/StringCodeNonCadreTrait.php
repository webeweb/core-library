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
 * Code non cadre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeNonCadreTrait {

    /**
     * Code non cadre.
     *
     * @var string
     */
    private $codeNonCadre;

    /**
     * Get the code non cadre.
     *
     * @return string Returns the code non cadre.
     */
    public function getCodeNonCadre() {
        return $this->codeNonCadre;
    }

    /**
     * Set the code non cadre.
     *
     * @param string $codeNonCadre The code non cadre.
     */
    public function setCodeNonCadre($codeNonCadre) {
        $this->codeNonCadre = $codeNonCadre;
        return $this;
    }
}
