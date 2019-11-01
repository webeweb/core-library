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
 * Code vmp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeVmpTrait {

    /**
     * Code vmp.
     *
     * @var string
     */
    private $codeVmp;

    /**
     * Get the code vmp.
     *
     * @return string Returns the code vmp.
     */
    public function getCodeVmp() {
        return $this->codeVmp;
    }

    /**
     * Set the code vmp.
     *
     * @param string $codeVmp The code vmp.
     */
    public function setCodeVmp($codeVmp) {
        $this->codeVmp = $codeVmp;
        return $this;
    }
}
