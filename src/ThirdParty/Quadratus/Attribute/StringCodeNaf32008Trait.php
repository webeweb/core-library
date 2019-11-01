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
 * Code naf32008 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeNaf32008Trait {

    /**
     * Code naf32008.
     *
     * @var string
     */
    private $codeNaf32008;

    /**
     * Get the code naf32008.
     *
     * @return string Returns the code naf32008.
     */
    public function getCodeNaf32008() {
        return $this->codeNaf32008;
    }

    /**
     * Set the code naf32008.
     *
     * @param string $codeNaf32008 The code naf32008.
     */
    public function setCodeNaf32008($codeNaf32008) {
        $this->codeNaf32008 = $codeNaf32008;
        return $this;
    }
}
