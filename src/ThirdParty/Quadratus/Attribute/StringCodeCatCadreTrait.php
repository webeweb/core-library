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
 * Code cat cadre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCatCadreTrait {

    /**
     * Code cat cadre.
     *
     * @var string
     */
    private $codeCatCadre;

    /**
     * Get the code cat cadre.
     *
     * @return string Returns the code cat cadre.
     */
    public function getCodeCatCadre() {
        return $this->codeCatCadre;
    }

    /**
     * Set the code cat cadre.
     *
     * @param string $codeCatCadre The code cat cadre.
     */
    public function setCodeCatCadre($codeCatCadre) {
        $this->codeCatCadre = $codeCatCadre;
        return $this;
    }
}
