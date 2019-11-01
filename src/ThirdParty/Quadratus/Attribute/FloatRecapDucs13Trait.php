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
 * Recap ducs13 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRecapDucs13Trait {

    /**
     * Recap ducs13.
     *
     * @var float
     */
    private $recapDucs13;

    /**
     * Get the recap ducs13.
     *
     * @return float Returns the recap ducs13.
     */
    public function getRecapDucs13() {
        return $this->recapDucs13;
    }

    /**
     * Set the recap ducs13.
     *
     * @param float $recapDucs13 The recap ducs13.
     */
    public function setRecapDucs13($recapDucs13) {
        $this->recapDucs13 = $recapDucs13;
        return $this;
    }
}
