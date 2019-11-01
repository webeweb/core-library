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
 * Btq2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBtq2Trait {

    /**
     * Btq2.
     *
     * @var string
     */
    private $btq2;

    /**
     * Get the btq2.
     *
     * @return string Returns the btq2.
     */
    public function getBtq2() {
        return $this->btq2;
    }

    /**
     * Set the btq2.
     *
     * @param string $btq2 The btq2.
     */
    public function setBtq2($btq2) {
        $this->btq2 = $btq2;
        return $this;
    }
}
