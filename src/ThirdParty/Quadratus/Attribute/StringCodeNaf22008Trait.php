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
 * Code naf22008 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeNaf22008Trait {

    /**
     * Code naf22008.
     *
     * @var string
     */
    private $codeNaf22008;

    /**
     * Get the code naf22008.
     *
     * @return string Returns the code naf22008.
     */
    public function getCodeNaf22008() {
        return $this->codeNaf22008;
    }

    /**
     * Set the code naf22008.
     *
     * @param string $codeNaf22008 The code naf22008.
     */
    public function setCodeNaf22008($codeNaf22008) {
        $this->codeNaf22008 = $codeNaf22008;
        return $this;
    }
}
