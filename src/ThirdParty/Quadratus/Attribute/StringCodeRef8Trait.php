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
 * Code ref8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRef8Trait {

    /**
     * Code ref8.
     *
     * @var string
     */
    private $codeRef8;

    /**
     * Get the code ref8.
     *
     * @return string Returns the code ref8.
     */
    public function getCodeRef8() {
        return $this->codeRef8;
    }

    /**
     * Set the code ref8.
     *
     * @param string $codeRef8 The code ref8.
     */
    public function setCodeRef8($codeRef8) {
        $this->codeRef8 = $codeRef8;
        return $this;
    }
}
