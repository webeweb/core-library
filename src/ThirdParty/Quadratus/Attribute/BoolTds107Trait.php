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
 * Tds107 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTds107Trait {

    /**
     * Tds107.
     *
     * @var bool
     */
    private $tds107;

    /**
     * Get the tds107.
     *
     * @return bool Returns the tds107.
     */
    public function getTds107() {
        return $this->tds107;
    }

    /**
     * Set the tds107.
     *
     * @param bool $tds107 The tds107.
     */
    public function setTds107($tds107) {
        $this->tds107 = $tds107;
        return $this;
    }
}
