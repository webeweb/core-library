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
 * Except trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatExceptTrait {

    /**
     * Except.
     *
     * @var float
     */
    private $except;

    /**
     * Get the except.
     *
     * @return float Returns the except.
     */
    public function getExcept() {
        return $this->except;
    }

    /**
     * Set the except.
     *
     * @param float $except The except.
     */
    public function setExcept($except) {
        $this->except = $except;
        return $this;
    }
}
