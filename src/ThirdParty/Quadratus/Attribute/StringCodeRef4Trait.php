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
 * Code ref4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRef4Trait {

    /**
     * Code ref4.
     *
     * @var string
     */
    private $codeRef4;

    /**
     * Get the code ref4.
     *
     * @return string Returns the code ref4.
     */
    public function getCodeRef4() {
        return $this->codeRef4;
    }

    /**
     * Set the code ref4.
     *
     * @param string $codeRef4 The code ref4.
     */
    public function setCodeRef4($codeRef4) {
        $this->codeRef4 = $codeRef4;
        return $this;
    }
}
