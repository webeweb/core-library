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
 * Recap ducs7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRecapDucs7Trait {

    /**
     * Recap ducs7.
     *
     * @var float
     */
    private $recapDucs7;

    /**
     * Get the recap ducs7.
     *
     * @return float Returns the recap ducs7.
     */
    public function getRecapDucs7() {
        return $this->recapDucs7;
    }

    /**
     * Set the recap ducs7.
     *
     * @param float $recapDucs7 The recap ducs7.
     */
    public function setRecapDucs7($recapDucs7) {
        $this->recapDucs7 = $recapDucs7;
        return $this;
    }
}
