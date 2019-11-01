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
 * Recap ducs1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRecapDucs1Trait {

    /**
     * Recap ducs1.
     *
     * @var float
     */
    private $recapDucs1;

    /**
     * Get the recap ducs1.
     *
     * @return float Returns the recap ducs1.
     */
    public function getRecapDucs1() {
        return $this->recapDucs1;
    }

    /**
     * Set the recap ducs1.
     *
     * @param float $recapDucs1 The recap ducs1.
     */
    public function setRecapDucs1($recapDucs1) {
        $this->recapDucs1 = $recapDucs1;
        return $this;
    }
}
