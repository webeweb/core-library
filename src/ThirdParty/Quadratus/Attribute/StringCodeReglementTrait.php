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
 * Code reglement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeReglementTrait {

    /**
     * Code reglement.
     *
     * @var string
     */
    private $codeReglement;

    /**
     * Get the code reglement.
     *
     * @return string Returns the code reglement.
     */
    public function getCodeReglement() {
        return $this->codeReglement;
    }

    /**
     * Set the code reglement.
     *
     * @param string $codeReglement The code reglement.
     */
    public function setCodeReglement($codeReglement) {
        $this->codeReglement = $codeReglement;
        return $this;
    }
}
