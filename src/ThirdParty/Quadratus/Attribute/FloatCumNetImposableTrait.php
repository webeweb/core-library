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
 * Cum net imposable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumNetImposableTrait {

    /**
     * Cum net imposable.
     *
     * @var float
     */
    private $cumNetImposable;

    /**
     * Get the cum net imposable.
     *
     * @return float Returns the cum net imposable.
     */
    public function getCumNetImposable() {
        return $this->cumNetImposable;
    }

    /**
     * Set the cum net imposable.
     *
     * @param float $cumNetImposable The cum net imposable.
     */
    public function setCumNetImposable($cumNetImposable) {
        $this->cumNetImposable = $cumNetImposable;
        return $this;
    }
}
