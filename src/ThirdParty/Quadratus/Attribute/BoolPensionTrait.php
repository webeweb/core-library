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
 * Pension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPensionTrait {

    /**
     * Pension.
     *
     * @var bool
     */
    private $pension;

    /**
     * Get the pension.
     *
     * @return bool Returns the pension.
     */
    public function getPension() {
        return $this->pension;
    }

    /**
     * Set the pension.
     *
     * @param bool $pension The pension.
     */
    public function setPension($pension) {
        $this->pension = $pension;
        return $this;
    }
}
