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
 * Tds122 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTds122Trait {

    /**
     * Tds122.
     *
     * @var bool
     */
    private $tds122;

    /**
     * Get the tds122.
     *
     * @return bool Returns the tds122.
     */
    public function getTds122() {
        return $this->tds122;
    }

    /**
     * Set the tds122.
     *
     * @param bool $tds122 The tds122.
     */
    public function setTds122($tds122) {
        $this->tds122 = $tds122;
        return $this;
    }
}
