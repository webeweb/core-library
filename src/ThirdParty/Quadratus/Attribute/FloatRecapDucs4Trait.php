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
 * Recap ducs4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRecapDucs4Trait {

    /**
     * Recap ducs4.
     *
     * @var float
     */
    private $recapDucs4;

    /**
     * Get the recap ducs4.
     *
     * @return float Returns the recap ducs4.
     */
    public function getRecapDucs4() {
        return $this->recapDucs4;
    }

    /**
     * Set the recap ducs4.
     *
     * @param float $recapDucs4 The recap ducs4.
     */
    public function setRecapDucs4($recapDucs4) {
        $this->recapDucs4 = $recapDucs4;
        return $this;
    }
}
