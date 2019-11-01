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
 * Code ref2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRef2Trait {

    /**
     * Code ref2.
     *
     * @var string
     */
    private $codeRef2;

    /**
     * Get the code ref2.
     *
     * @return string Returns the code ref2.
     */
    public function getCodeRef2() {
        return $this->codeRef2;
    }

    /**
     * Set the code ref2.
     *
     * @param string $codeRef2 The code ref2.
     */
    public function setCodeRef2($codeRef2) {
        $this->codeRef2 = $codeRef2;
        return $this;
    }
}
