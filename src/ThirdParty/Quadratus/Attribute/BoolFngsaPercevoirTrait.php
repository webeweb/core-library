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
 * Fngsa percevoir trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFngsaPercevoirTrait {

    /**
     * Fngsa percevoir.
     *
     * @var bool
     */
    private $fngsaPercevoir;

    /**
     * Get the fngsa percevoir.
     *
     * @return bool Returns the fngsa percevoir.
     */
    public function getFngsaPercevoir() {
        return $this->fngsaPercevoir;
    }

    /**
     * Set the fngsa percevoir.
     *
     * @param bool $fngsaPercevoir The fngsa percevoir.
     */
    public function setFngsaPercevoir($fngsaPercevoir) {
        $this->fngsaPercevoir = $fngsaPercevoir;
        return $this;
    }
}
