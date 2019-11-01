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
 * Mt net paye theo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtNetPayeTheoTrait {

    /**
     * Mt net paye theo.
     *
     * @var float
     */
    private $mtNetPayeTheo;

    /**
     * Get the mt net paye theo.
     *
     * @return float Returns the mt net paye theo.
     */
    public function getMtNetPayeTheo() {
        return $this->mtNetPayeTheo;
    }

    /**
     * Set the mt net paye theo.
     *
     * @param float $mtNetPayeTheo The mt net paye theo.
     */
    public function setMtNetPayeTheo($mtNetPayeTheo) {
        $this->mtNetPayeTheo = $mtNetPayeTheo;
        return $this;
    }
}
