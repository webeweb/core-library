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
 * Code2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCode2Trait {

    /**
     * Code2.
     *
     * @var string
     */
    private $code2;

    /**
     * Get the code2.
     *
     * @return string Returns the code2.
     */
    public function getCode2() {
        return $this->code2;
    }

    /**
     * Set the code2.
     *
     * @param string $code2 The code2.
     */
    public function setCode2($code2) {
        $this->code2 = $code2;
        return $this;
    }
}
