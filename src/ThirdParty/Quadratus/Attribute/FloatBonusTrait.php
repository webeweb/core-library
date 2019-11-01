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
 * Bonus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBonusTrait {

    /**
     * Bonus.
     *
     * @var float
     */
    private $bonus;

    /**
     * Get the bonus.
     *
     * @return float Returns the bonus.
     */
    public function getBonus() {
        return $this->bonus;
    }

    /**
     * Set the bonus.
     *
     * @param float $bonus The bonus.
     */
    public function setBonus($bonus) {
        $this->bonus = $bonus;
        return $this;
    }
}
