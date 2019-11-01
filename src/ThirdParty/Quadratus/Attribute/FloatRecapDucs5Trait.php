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
 * Recap ducs5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRecapDucs5Trait {

    /**
     * Recap ducs5.
     *
     * @var float
     */
    private $recapDucs5;

    /**
     * Get the recap ducs5.
     *
     * @return float Returns the recap ducs5.
     */
    public function getRecapDucs5() {
        return $this->recapDucs5;
    }

    /**
     * Set the recap ducs5.
     *
     * @param float $recapDucs5 The recap ducs5.
     */
    public function setRecapDucs5($recapDucs5) {
        $this->recapDucs5 = $recapDucs5;
        return $this;
    }
}
