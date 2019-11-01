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
 * An n1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAnN1Trait {

    /**
     * An n1.
     *
     * @var float
     */
    private $anN1;

    /**
     * Get the an n1.
     *
     * @return float Returns the an n1.
     */
    public function getAnN1() {
        return $this->anN1;
    }

    /**
     * Set the an n1.
     *
     * @param float $anN1 The an n1.
     */
    public function setAnN1($anN1) {
        $this->anN1 = $anN1;
        return $this;
    }
}
