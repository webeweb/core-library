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
 * Options calc abs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolOptionsCalcAbsTrait {

    /**
     * Options calc abs.
     *
     * @var bool
     */
    private $optionsCalcAbs;

    /**
     * Get the options calc abs.
     *
     * @return bool Returns the options calc abs.
     */
    public function getOptionsCalcAbs() {
        return $this->optionsCalcAbs;
    }

    /**
     * Set the options calc abs.
     *
     * @param bool $optionsCalcAbs The options calc abs.
     */
    public function setOptionsCalcAbs($optionsCalcAbs) {
        $this->optionsCalcAbs = $optionsCalcAbs;
        return $this;
    }
}
