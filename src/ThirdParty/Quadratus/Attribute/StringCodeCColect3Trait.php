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
 * Code c colect3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCColect3Trait {

    /**
     * Code c colect3.
     *
     * @var string
     */
    private $codeCColect3;

    /**
     * Get the code c colect3.
     *
     * @return string Returns the code c colect3.
     */
    public function getCodeCColect3() {
        return $this->codeCColect3;
    }

    /**
     * Set the code c colect3.
     *
     * @param string $codeCColect3 The code c colect3.
     */
    public function setCodeCColect3($codeCColect3) {
        $this->codeCColect3 = $codeCColect3;
        return $this;
    }
}
