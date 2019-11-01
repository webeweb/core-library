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
 * Recap ducs6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRecapDucs6Trait {

    /**
     * Recap ducs6.
     *
     * @var float
     */
    private $recapDucs6;

    /**
     * Get the recap ducs6.
     *
     * @return float Returns the recap ducs6.
     */
    public function getRecapDucs6() {
        return $this->recapDucs6;
    }

    /**
     * Set the recap ducs6.
     *
     * @param float $recapDucs6 The recap ducs6.
     */
    public function setRecapDucs6($recapDucs6) {
        $this->recapDucs6 = $recapDucs6;
        return $this;
    }
}
