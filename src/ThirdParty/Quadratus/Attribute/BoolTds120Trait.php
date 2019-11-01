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
 * Tds120 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTds120Trait {

    /**
     * Tds120.
     *
     * @var bool
     */
    private $tds120;

    /**
     * Get the tds120.
     *
     * @return bool Returns the tds120.
     */
    public function getTds120() {
        return $this->tds120;
    }

    /**
     * Set the tds120.
     *
     * @param bool $tds120 The tds120.
     */
    public function setTds120($tds120) {
        $this->tds120 = $tds120;
        return $this;
    }
}
