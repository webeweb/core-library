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
 * Code regroup1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegroup1Trait {

    /**
     * Code regroup1.
     *
     * @var string
     */
    private $codeRegroup1;

    /**
     * Get the code regroup1.
     *
     * @return string Returns the code regroup1.
     */
    public function getCodeRegroup1() {
        return $this->codeRegroup1;
    }

    /**
     * Set the code regroup1.
     *
     * @param string $codeRegroup1 The code regroup1.
     */
    public function setCodeRegroup1($codeRegroup1) {
        $this->codeRegroup1 = $codeRegroup1;
        return $this;
    }
}
