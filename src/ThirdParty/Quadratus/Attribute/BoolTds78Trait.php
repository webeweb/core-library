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
 * Tds78 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTds78Trait {

    /**
     * Tds78.
     *
     * @var bool
     */
    private $tds78;

    /**
     * Get the tds78.
     *
     * @return bool Returns the tds78.
     */
    public function getTds78() {
        return $this->tds78;
    }

    /**
     * Set the tds78.
     *
     * @param bool $tds78 The tds78.
     */
    public function setTds78($tds78) {
        $this->tds78 = $tds78;
        return $this;
    }
}
