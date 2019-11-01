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
 * Code c colect4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCColect4Trait {

    /**
     * Code c colect4.
     *
     * @var string
     */
    private $codeCColect4;

    /**
     * Get the code c colect4.
     *
     * @return string Returns the code c colect4.
     */
    public function getCodeCColect4() {
        return $this->codeCColect4;
    }

    /**
     * Set the code c colect4.
     *
     * @param string $codeCColect4 The code c colect4.
     */
    public function setCodeCColect4($codeCColect4) {
        $this->codeCColect4 = $codeCColect4;
        return $this;
    }
}
