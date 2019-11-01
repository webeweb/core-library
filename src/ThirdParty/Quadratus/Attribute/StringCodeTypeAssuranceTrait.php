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
 * Code type assurance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTypeAssuranceTrait {

    /**
     * Code type assurance.
     *
     * @var string
     */
    private $codeTypeAssurance;

    /**
     * Get the code type assurance.
     *
     * @return string Returns the code type assurance.
     */
    public function getCodeTypeAssurance() {
        return $this->codeTypeAssurance;
    }

    /**
     * Set the code type assurance.
     *
     * @param string $codeTypeAssurance The code type assurance.
     */
    public function setCodeTypeAssurance($codeTypeAssurance) {
        $this->codeTypeAssurance = $codeTypeAssurance;
        return $this;
    }
}
