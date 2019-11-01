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
 * Recap ducs12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRecapDucs12Trait {

    /**
     * Recap ducs12.
     *
     * @var float
     */
    private $recapDucs12;

    /**
     * Get the recap ducs12.
     *
     * @return float Returns the recap ducs12.
     */
    public function getRecapDucs12() {
        return $this->recapDucs12;
    }

    /**
     * Set the recap ducs12.
     *
     * @param float $recapDucs12 The recap ducs12.
     */
    public function setRecapDucs12($recapDucs12) {
        $this->recapDucs12 = $recapDucs12;
        return $this;
    }
}
