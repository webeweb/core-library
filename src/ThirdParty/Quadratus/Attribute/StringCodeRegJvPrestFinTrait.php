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
 * Code reg jv prest fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegJvPrestFinTrait {

    /**
     * Code reg jv prest fin.
     *
     * @var string
     */
    private $codeRegJvPrestFin;

    /**
     * Get the code reg jv prest fin.
     *
     * @return string Returns the code reg jv prest fin.
     */
    public function getCodeRegJvPrestFin() {
        return $this->codeRegJvPrestFin;
    }

    /**
     * Set the code reg jv prest fin.
     *
     * @param string $codeRegJvPrestFin The code reg jv prest fin.
     */
    public function setCodeRegJvPrestFin($codeRegJvPrestFin) {
        $this->codeRegJvPrestFin = $codeRegJvPrestFin;
        return $this;
    }
}
