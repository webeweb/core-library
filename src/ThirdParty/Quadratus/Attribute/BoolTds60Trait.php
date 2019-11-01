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
 * Tds60 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTds60Trait {

    /**
     * Tds60.
     *
     * @var bool
     */
    private $tds60;

    /**
     * Get the tds60.
     *
     * @return bool Returns the tds60.
     */
    public function getTds60() {
        return $this->tds60;
    }

    /**
     * Set the tds60.
     *
     * @param bool $tds60 The tds60.
     */
    public function setTds60($tds60) {
        $this->tds60 = $tds60;
        return $this;
    }
}
