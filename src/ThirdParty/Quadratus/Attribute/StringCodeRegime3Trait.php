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
 * Code regime3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegime3Trait {

    /**
     * Code regime3.
     *
     * @var string
     */
    private $codeRegime3;

    /**
     * Get the code regime3.
     *
     * @return string Returns the code regime3.
     */
    public function getCodeRegime3() {
        return $this->codeRegime3;
    }

    /**
     * Set the code regime3.
     *
     * @param string $codeRegime3 The code regime3.
     */
    public function setCodeRegime3($codeRegime3) {
        $this->codeRegime3 = $codeRegime3;
        return $this;
    }
}
