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
 * Code ref1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRef1Trait {

    /**
     * Code ref1.
     *
     * @var string
     */
    private $codeRef1;

    /**
     * Get the code ref1.
     *
     * @return string Returns the code ref1.
     */
    public function getCodeRef1() {
        return $this->codeRef1;
    }

    /**
     * Set the code ref1.
     *
     * @param string $codeRef1 The code ref1.
     */
    public function setCodeRef1($codeRef1) {
        $this->codeRef1 = $codeRef1;
        return $this;
    }
}
