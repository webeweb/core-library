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
 * Code c colect1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCColect1Trait {

    /**
     * Code c colect1.
     *
     * @var string
     */
    private $codeCColect1;

    /**
     * Get the code c colect1.
     *
     * @return string Returns the code c colect1.
     */
    public function getCodeCColect1() {
        return $this->codeCColect1;
    }

    /**
     * Set the code c colect1.
     *
     * @param string $codeCColect1 The code c colect1.
     */
    public function setCodeCColect1($codeCColect1) {
        $this->codeCColect1 = $codeCColect1;
        return $this;
    }
}
