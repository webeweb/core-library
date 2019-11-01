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
 * Double7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDouble7Trait {

    /**
     * Double7.
     *
     * @var float
     */
    private $double7;

    /**
     * Get the double7.
     *
     * @return float Returns the double7.
     */
    public function getDouble7() {
        return $this->double7;
    }

    /**
     * Set the double7.
     *
     * @param float $double7 The double7.
     */
    public function setDouble7($double7) {
        $this->double7 = $double7;
        return $this;
    }
}
