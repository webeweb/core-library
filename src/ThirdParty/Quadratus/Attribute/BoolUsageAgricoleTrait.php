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
 * Usage agricole trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolUsageAgricoleTrait {

    /**
     * Usage agricole.
     *
     * @var bool
     */
    private $usageAgricole;

    /**
     * Get the usage agricole.
     *
     * @return bool Returns the usage agricole.
     */
    public function getUsageAgricole() {
        return $this->usageAgricole;
    }

    /**
     * Set the usage agricole.
     *
     * @param bool $usageAgricole The usage agricole.
     */
    public function setUsageAgricole($usageAgricole) {
        $this->usageAgricole = $usageAgricole;
        return $this;
    }
}
