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
 * Tds110 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTds110Trait {

    /**
     * Tds110.
     *
     * @var bool
     */
    private $tds110;

    /**
     * Get the tds110.
     *
     * @return bool Returns the tds110.
     */
    public function getTds110() {
        return $this->tds110;
    }

    /**
     * Set the tds110.
     *
     * @param bool $tds110 The tds110.
     */
    public function setTds110($tds110) {
        $this->tds110 = $tds110;
        return $this;
    }
}
