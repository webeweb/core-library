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
 * Code naf2008 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeNaf2008Trait {

    /**
     * Code naf2008.
     *
     * @var string
     */
    private $codeNaf2008;

    /**
     * Get the code naf2008.
     *
     * @return string Returns the code naf2008.
     */
    public function getCodeNaf2008() {
        return $this->codeNaf2008;
    }

    /**
     * Set the code naf2008.
     *
     * @param string $codeNaf2008 The code naf2008.
     */
    public function setCodeNaf2008($codeNaf2008) {
        $this->codeNaf2008 = $codeNaf2008;
        return $this;
    }
}
