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
 * Fait generic4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitGeneric4Trait {

    /**
     * Fait generic4.
     *
     * @var string
     */
    private $faitGeneric4;

    /**
     * Get the fait generic4.
     *
     * @return string Returns the fait generic4.
     */
    public function getFaitGeneric4() {
        return $this->faitGeneric4;
    }

    /**
     * Set the fait generic4.
     *
     * @param string $faitGeneric4 The fait generic4.
     */
    public function setFaitGeneric4($faitGeneric4) {
        $this->faitGeneric4 = $faitGeneric4;
        return $this;
    }
}
