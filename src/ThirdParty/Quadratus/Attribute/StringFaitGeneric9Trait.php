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
 * Fait generic9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitGeneric9Trait {

    /**
     * Fait generic9.
     *
     * @var string
     */
    private $faitGeneric9;

    /**
     * Get the fait generic9.
     *
     * @return string Returns the fait generic9.
     */
    public function getFaitGeneric9() {
        return $this->faitGeneric9;
    }

    /**
     * Set the fait generic9.
     *
     * @param string $faitGeneric9 The fait generic9.
     */
    public function setFaitGeneric9($faitGeneric9) {
        $this->faitGeneric9 = $faitGeneric9;
        return $this;
    }
}
