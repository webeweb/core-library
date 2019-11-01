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
 * Code1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCode1Trait {

    /**
     * Code1.
     *
     * @var string
     */
    private $code1;

    /**
     * Get the code1.
     *
     * @return string Returns the code1.
     */
    public function getCode1() {
        return $this->code1;
    }

    /**
     * Set the code1.
     *
     * @param string $code1 The code1.
     */
    public function setCode1($code1) {
        $this->code1 = $code1;
        return $this;
    }
}
