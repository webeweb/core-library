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
 * Code type exo3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTypeExo3Trait {

    /**
     * Code type exo3.
     *
     * @var string
     */
    private $codeTypeExo3;

    /**
     * Get the code type exo3.
     *
     * @return string Returns the code type exo3.
     */
    public function getCodeTypeExo3() {
        return $this->codeTypeExo3;
    }

    /**
     * Set the code type exo3.
     *
     * @param string $codeTypeExo3 The code type exo3.
     */
    public function setCodeTypeExo3($codeTypeExo3) {
        $this->codeTypeExo3 = $codeTypeExo3;
        return $this;
    }
}
