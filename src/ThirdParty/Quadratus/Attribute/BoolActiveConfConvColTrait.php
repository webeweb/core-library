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
 * Active conf conv col trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActiveConfConvColTrait {

    /**
     * Active conf conv col.
     *
     * @var bool
     */
    private $activeConfConvCol;

    /**
     * Get the active conf conv col.
     *
     * @return bool Returns the active conf conv col.
     */
    public function getActiveConfConvCol() {
        return $this->activeConfConvCol;
    }

    /**
     * Set the active conf conv col.
     *
     * @param bool $activeConfConvCol The active conf conv col.
     */
    public function setActiveConfConvCol($activeConfConvCol) {
        $this->activeConfConvCol = $activeConfConvCol;
        return $this;
    }
}
