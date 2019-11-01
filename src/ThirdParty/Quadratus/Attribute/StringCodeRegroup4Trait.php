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
 * Code regroup4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegroup4Trait {

    /**
     * Code regroup4.
     *
     * @var string
     */
    private $codeRegroup4;

    /**
     * Get the code regroup4.
     *
     * @return string Returns the code regroup4.
     */
    public function getCodeRegroup4() {
        return $this->codeRegroup4;
    }

    /**
     * Set the code regroup4.
     *
     * @param string $codeRegroup4 The code regroup4.
     */
    public function setCodeRegroup4($codeRegroup4) {
        $this->codeRegroup4 = $codeRegroup4;
        return $this;
    }
}
