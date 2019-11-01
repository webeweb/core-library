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
 * Code ref6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRef6Trait {

    /**
     * Code ref6.
     *
     * @var string
     */
    private $codeRef6;

    /**
     * Get the code ref6.
     *
     * @return string Returns the code ref6.
     */
    public function getCodeRef6() {
        return $this->codeRef6;
    }

    /**
     * Set the code ref6.
     *
     * @param string $codeRef6 The code ref6.
     */
    public function setCodeRef6($codeRef6) {
        $this->codeRef6 = $codeRef6;
        return $this;
    }
}
