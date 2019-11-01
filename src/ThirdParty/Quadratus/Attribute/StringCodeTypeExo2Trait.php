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
 * Code type exo2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTypeExo2Trait {

    /**
     * Code type exo2.
     *
     * @var string
     */
    private $codeTypeExo2;

    /**
     * Get the code type exo2.
     *
     * @return string Returns the code type exo2.
     */
    public function getCodeTypeExo2() {
        return $this->codeTypeExo2;
    }

    /**
     * Set the code type exo2.
     *
     * @param string $codeTypeExo2 The code type exo2.
     */
    public function setCodeTypeExo2($codeTypeExo2) {
        $this->codeTypeExo2 = $codeTypeExo2;
        return $this;
    }
}
