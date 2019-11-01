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
 * Recap ducs10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRecapDucs10Trait {

    /**
     * Recap ducs10.
     *
     * @var float
     */
    private $recapDucs10;

    /**
     * Get the recap ducs10.
     *
     * @return float Returns the recap ducs10.
     */
    public function getRecapDucs10() {
        return $this->recapDucs10;
    }

    /**
     * Set the recap ducs10.
     *
     * @param float $recapDucs10 The recap ducs10.
     */
    public function setRecapDucs10($recapDucs10) {
        $this->recapDucs10 = $recapDucs10;
        return $this;
    }
}
