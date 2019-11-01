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
 * Stc auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolStcAutoTrait {

    /**
     * Stc auto.
     *
     * @var bool
     */
    private $stcAuto;

    /**
     * Get the stc auto.
     *
     * @return bool Returns the stc auto.
     */
    public function getStcAuto() {
        return $this->stcAuto;
    }

    /**
     * Set the stc auto.
     *
     * @param bool $stcAuto The stc auto.
     */
    public function setStcAuto($stcAuto) {
        $this->stcAuto = $stcAuto;
        return $this;
    }
}
