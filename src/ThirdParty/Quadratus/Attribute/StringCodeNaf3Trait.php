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
 * Code naf3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeNaf3Trait {

    /**
     * Code naf3.
     *
     * @var string
     */
    private $codeNaf3;

    /**
     * Get the code naf3.
     *
     * @return string Returns the code naf3.
     */
    public function getCodeNaf3() {
        return $this->codeNaf3;
    }

    /**
     * Set the code naf3.
     *
     * @param string $codeNaf3 The code naf3.
     */
    public function setCodeNaf3($codeNaf3) {
        $this->codeNaf3 = $codeNaf3;
        return $this;
    }
}
