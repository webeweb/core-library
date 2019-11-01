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
 * Code c colect2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCColect2Trait {

    /**
     * Code c colect2.
     *
     * @var string
     */
    private $codeCColect2;

    /**
     * Get the code c colect2.
     *
     * @return string Returns the code c colect2.
     */
    public function getCodeCColect2() {
        return $this->codeCColect2;
    }

    /**
     * Set the code c colect2.
     *
     * @param string $codeCColect2 The code c colect2.
     */
    public function setCodeCColect2($codeCColect2) {
        $this->codeCColect2 = $codeCColect2;
        return $this;
    }
}
