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
 * Recap ducs8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRecapDucs8Trait {

    /**
     * Recap ducs8.
     *
     * @var float
     */
    private $recapDucs8;

    /**
     * Get the recap ducs8.
     *
     * @return float Returns the recap ducs8.
     */
    public function getRecapDucs8() {
        return $this->recapDucs8;
    }

    /**
     * Set the recap ducs8.
     *
     * @param float $recapDucs8 The recap ducs8.
     */
    public function setRecapDucs8($recapDucs8) {
        $this->recapDucs8 = $recapDucs8;
        return $this;
    }
}
