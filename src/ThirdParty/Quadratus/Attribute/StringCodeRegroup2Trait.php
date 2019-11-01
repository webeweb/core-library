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
 * Code regroup2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegroup2Trait {

    /**
     * Code regroup2.
     *
     * @var string
     */
    private $codeRegroup2;

    /**
     * Get the code regroup2.
     *
     * @return string Returns the code regroup2.
     */
    public function getCodeRegroup2() {
        return $this->codeRegroup2;
    }

    /**
     * Set the code regroup2.
     *
     * @param string $codeRegroup2 The code regroup2.
     */
    public function setCodeRegroup2($codeRegroup2) {
        $this->codeRegroup2 = $codeRegroup2;
        return $this;
    }
}
