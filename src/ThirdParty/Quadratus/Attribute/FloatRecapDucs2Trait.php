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
 * Recap ducs2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRecapDucs2Trait {

    /**
     * Recap ducs2.
     *
     * @var float
     */
    private $recapDucs2;

    /**
     * Get the recap ducs2.
     *
     * @return float Returns the recap ducs2.
     */
    public function getRecapDucs2() {
        return $this->recapDucs2;
    }

    /**
     * Set the recap ducs2.
     *
     * @param float $recapDucs2 The recap ducs2.
     */
    public function setRecapDucs2($recapDucs2) {
        $this->recapDucs2 = $recapDucs2;
        return $this;
    }
}
