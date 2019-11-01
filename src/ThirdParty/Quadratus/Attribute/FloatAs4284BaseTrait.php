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
 * As4284 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAs4284BaseTrait {

    /**
     * As4284 base.
     *
     * @var float
     */
    private $as4284Base;

    /**
     * Get the as4284 base.
     *
     * @return float Returns the as4284 base.
     */
    public function getAs4284Base() {
        return $this->as4284Base;
    }

    /**
     * Set the as4284 base.
     *
     * @param float $as4284Base The as4284 base.
     */
    public function setAs4284Base($as4284Base) {
        $this->as4284Base = $as4284Base;
        return $this;
    }
}
