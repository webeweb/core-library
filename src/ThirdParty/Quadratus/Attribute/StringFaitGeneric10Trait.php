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
 * Fait generic10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitGeneric10Trait {

    /**
     * Fait generic10.
     *
     * @var string
     */
    private $faitGeneric10;

    /**
     * Get the fait generic10.
     *
     * @return string Returns the fait generic10.
     */
    public function getFaitGeneric10() {
        return $this->faitGeneric10;
    }

    /**
     * Set the fait generic10.
     *
     * @param string $faitGeneric10 The fait generic10.
     */
    public function setFaitGeneric10($faitGeneric10) {
        $this->faitGeneric10 = $faitGeneric10;
        return $this;
    }
}
