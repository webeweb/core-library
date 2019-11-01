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
 * Code reg jv prest debut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegJvPrestDebutTrait {

    /**
     * Code reg jv prest debut.
     *
     * @var string
     */
    private $codeRegJvPrestDebut;

    /**
     * Get the code reg jv prest debut.
     *
     * @return string Returns the code reg jv prest debut.
     */
    public function getCodeRegJvPrestDebut() {
        return $this->codeRegJvPrestDebut;
    }

    /**
     * Set the code reg jv prest debut.
     *
     * @param string $codeRegJvPrestDebut The code reg jv prest debut.
     */
    public function setCodeRegJvPrestDebut($codeRegJvPrestDebut) {
        $this->codeRegJvPrestDebut = $codeRegJvPrestDebut;
        return $this;
    }
}
