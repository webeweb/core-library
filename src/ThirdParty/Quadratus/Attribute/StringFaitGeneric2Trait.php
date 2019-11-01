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
 * Fait generic2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitGeneric2Trait {

    /**
     * Fait generic2.
     *
     * @var string
     */
    private $faitGeneric2;

    /**
     * Get the fait generic2.
     *
     * @return string Returns the fait generic2.
     */
    public function getFaitGeneric2() {
        return $this->faitGeneric2;
    }

    /**
     * Set the fait generic2.
     *
     * @param string $faitGeneric2 The fait generic2.
     */
    public function setFaitGeneric2($faitGeneric2) {
        $this->faitGeneric2 = $faitGeneric2;
        return $this;
    }
}
