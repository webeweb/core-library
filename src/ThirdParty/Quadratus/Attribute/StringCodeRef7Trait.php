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
 * Code ref7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRef7Trait {

    /**
     * Code ref7.
     *
     * @var string
     */
    private $codeRef7;

    /**
     * Get the code ref7.
     *
     * @return string Returns the code ref7.
     */
    public function getCodeRef7() {
        return $this->codeRef7;
    }

    /**
     * Set the code ref7.
     *
     * @param string $codeRef7 The code ref7.
     */
    public function setCodeRef7($codeRef7) {
        $this->codeRef7 = $codeRef7;
        return $this;
    }
}
