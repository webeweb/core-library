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
 * Edi400 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEdi400Trait {

    /**
     * Edi400.
     *
     * @var bool
     */
    private $edi400;

    /**
     * Get the edi400.
     *
     * @return bool Returns the edi400.
     */
    public function getEdi400() {
        return $this->edi400;
    }

    /**
     * Set the edi400.
     *
     * @param bool $edi400 The edi400.
     */
    public function setEdi400($edi400) {
        $this->edi400 = $edi400;
        return $this;
    }
}
