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
 * Code naf2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeNaf2Trait {

    /**
     * Code naf2.
     *
     * @var string
     */
    private $codeNaf2;

    /**
     * Get the code naf2.
     *
     * @return string Returns the code naf2.
     */
    public function getCodeNaf2() {
        return $this->codeNaf2;
    }

    /**
     * Set the code naf2.
     *
     * @param string $codeNaf2 The code naf2.
     */
    public function setCodeNaf2($codeNaf2) {
        $this->codeNaf2 = $codeNaf2;
        return $this;
    }
}
