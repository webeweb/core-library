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
 * Code regroup3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegroup3Trait {

    /**
     * Code regroup3.
     *
     * @var string
     */
    private $codeRegroup3;

    /**
     * Get the code regroup3.
     *
     * @return string Returns the code regroup3.
     */
    public function getCodeRegroup3() {
        return $this->codeRegroup3;
    }

    /**
     * Set the code regroup3.
     *
     * @param string $codeRegroup3 The code regroup3.
     */
    public function setCodeRegroup3($codeRegroup3) {
        $this->codeRegroup3 = $codeRegroup3;
        return $this;
    }
}
