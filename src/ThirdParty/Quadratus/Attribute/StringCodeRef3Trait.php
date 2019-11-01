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
 * Code ref3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRef3Trait {

    /**
     * Code ref3.
     *
     * @var string
     */
    private $codeRef3;

    /**
     * Get the code ref3.
     *
     * @return string Returns the code ref3.
     */
    public function getCodeRef3() {
        return $this->codeRef3;
    }

    /**
     * Set the code ref3.
     *
     * @param string $codeRef3 The code ref3.
     */
    public function setCodeRef3($codeRef3) {
        $this->codeRef3 = $codeRef3;
        return $this;
    }
}
