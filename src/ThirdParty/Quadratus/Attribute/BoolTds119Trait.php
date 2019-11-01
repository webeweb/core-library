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
 * Tds119 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTds119Trait {

    /**
     * Tds119.
     *
     * @var bool
     */
    private $tds119;

    /**
     * Get the tds119.
     *
     * @return bool Returns the tds119.
     */
    public function getTds119() {
        return $this->tds119;
    }

    /**
     * Set the tds119.
     *
     * @param bool $tds119 The tds119.
     */
    public function setTds119($tds119) {
        $this->tds119 = $tds119;
        return $this;
    }
}
