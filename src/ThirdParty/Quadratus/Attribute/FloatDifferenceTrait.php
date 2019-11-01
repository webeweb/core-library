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
 * Difference trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDifferenceTrait {

    /**
     * Difference.
     *
     * @var float
     */
    private $difference;

    /**
     * Get the difference.
     *
     * @return float Returns the difference.
     */
    public function getDifference() {
        return $this->difference;
    }

    /**
     * Set the difference.
     *
     * @param float $difference The difference.
     */
    public function setDifference($difference) {
        $this->difference = $difference;
        return $this;
    }
}
