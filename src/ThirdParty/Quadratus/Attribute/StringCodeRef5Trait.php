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
 * Code ref5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRef5Trait {

    /**
     * Code ref5.
     *
     * @var string
     */
    private $codeRef5;

    /**
     * Get the code ref5.
     *
     * @return string Returns the code ref5.
     */
    public function getCodeRef5() {
        return $this->codeRef5;
    }

    /**
     * Set the code ref5.
     *
     * @param string $codeRef5 The code ref5.
     */
    public function setCodeRef5($codeRef5) {
        $this->codeRef5 = $codeRef5;
        return $this;
    }
}
