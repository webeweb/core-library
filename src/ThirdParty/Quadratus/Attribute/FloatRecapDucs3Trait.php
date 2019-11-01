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
 * Recap ducs3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRecapDucs3Trait {

    /**
     * Recap ducs3.
     *
     * @var float
     */
    private $recapDucs3;

    /**
     * Get the recap ducs3.
     *
     * @return float Returns the recap ducs3.
     */
    public function getRecapDucs3() {
        return $this->recapDucs3;
    }

    /**
     * Set the recap ducs3.
     *
     * @param float $recapDucs3 The recap ducs3.
     */
    public function setRecapDucs3($recapDucs3) {
        $this->recapDucs3 = $recapDucs3;
        return $this;
    }
}
