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
 * Fait generic3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitGeneric3Trait {

    /**
     * Fait generic3.
     *
     * @var string
     */
    private $faitGeneric3;

    /**
     * Get the fait generic3.
     *
     * @return string Returns the fait generic3.
     */
    public function getFaitGeneric3() {
        return $this->faitGeneric3;
    }

    /**
     * Set the fait generic3.
     *
     * @param string $faitGeneric3 The fait generic3.
     */
    public function setFaitGeneric3($faitGeneric3) {
        $this->faitGeneric3 = $faitGeneric3;
        return $this;
    }
}
