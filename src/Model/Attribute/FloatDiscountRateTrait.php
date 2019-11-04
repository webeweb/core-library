<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * Float discount rate trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait FloatDiscountRateTrait {

    /**
     * Discount rate.
     *
     * @var float
     */
    protected $discountRate;

    /**
     * Get the discount rate.
     *
     * @return float Returns the discount rate.
     */
    public function getDiscountRate() {
        return $this->discountRate;
    }

    /**
     * Set the discount rate.
     *
     * @param float $discountRate The discount rate.
     */
    public function setDiscountRate($discountRate) {
        $this->discountRate = $discountRate;
        return $this;
    }
}
