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
 * Code ref10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRef10Trait {

    /**
     * Code ref10.
     *
     * @var string
     */
    private $codeRef10;

    /**
     * Get the code ref10.
     *
     * @return string Returns the code ref10.
     */
    public function getCodeRef10() {
        return $this->codeRef10;
    }

    /**
     * Set the code ref10.
     *
     * @param string $codeRef10 The code ref10.
     */
    public function setCodeRef10($codeRef10) {
        $this->codeRef10 = $codeRef10;
        return $this;
    }
}
