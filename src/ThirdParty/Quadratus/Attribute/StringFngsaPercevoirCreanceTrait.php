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
 * Fngsa percevoir creance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFngsaPercevoirCreanceTrait {

    /**
     * Fngsa percevoir creance.
     *
     * @var string
     */
    private $fngsaPercevoirCreance;

    /**
     * Get the fngsa percevoir creance.
     *
     * @return string Returns the fngsa percevoir creance.
     */
    public function getFngsaPercevoirCreance() {
        return $this->fngsaPercevoirCreance;
    }

    /**
     * Set the fngsa percevoir creance.
     *
     * @param string $fngsaPercevoirCreance The fngsa percevoir creance.
     */
    public function setFngsaPercevoirCreance($fngsaPercevoirCreance) {
        $this->fngsaPercevoirCreance = $fngsaPercevoirCreance;
        return $this;
    }
}
