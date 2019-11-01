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
 * Code type exo1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTypeExo1Trait {

    /**
     * Code type exo1.
     *
     * @var string
     */
    private $codeTypeExo1;

    /**
     * Get the code type exo1.
     *
     * @return string Returns the code type exo1.
     */
    public function getCodeTypeExo1() {
        return $this->codeTypeExo1;
    }

    /**
     * Set the code type exo1.
     *
     * @param string $codeTypeExo1 The code type exo1.
     */
    public function setCodeTypeExo1($codeTypeExo1) {
        $this->codeTypeExo1 = $codeTypeExo1;
        return $this;
    }
}
