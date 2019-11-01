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
 * Base33pcent trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBase33pcentTrait {

    /**
     * Base33pcent.
     *
     * @var float
     */
    private $base33pcent;

    /**
     * Get the base33pcent.
     *
     * @return float Returns the base33pcent.
     */
    public function getBase33pcent() {
        return $this->base33pcent;
    }

    /**
     * Set the base33pcent.
     *
     * @param float $base33pcent The base33pcent.
     */
    public function setBase33pcent($base33pcent) {
        $this->base33pcent = $base33pcent;
        return $this;
    }
}
