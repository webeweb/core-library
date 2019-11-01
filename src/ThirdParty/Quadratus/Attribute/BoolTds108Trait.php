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
 * Tds108 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTds108Trait {

    /**
     * Tds108.
     *
     * @var bool
     */
    private $tds108;

    /**
     * Get the tds108.
     *
     * @return bool Returns the tds108.
     */
    public function getTds108() {
        return $this->tds108;
    }

    /**
     * Set the tds108.
     *
     * @param bool $tds108 The tds108.
     */
    public function setTds108($tds108) {
        $this->tds108 = $tds108;
        return $this;
    }
}
