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
 * Recap ducs9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRecapDucs9Trait {

    /**
     * Recap ducs9.
     *
     * @var float
     */
    private $recapDucs9;

    /**
     * Get the recap ducs9.
     *
     * @return float Returns the recap ducs9.
     */
    public function getRecapDucs9() {
        return $this->recapDucs9;
    }

    /**
     * Set the recap ducs9.
     *
     * @param float $recapDucs9 The recap ducs9.
     */
    public function setRecapDucs9($recapDucs9) {
        $this->recapDucs9 = $recapDucs9;
        return $this;
    }
}
