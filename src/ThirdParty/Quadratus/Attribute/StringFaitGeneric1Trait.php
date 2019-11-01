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
 * Fait generic1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitGeneric1Trait {

    /**
     * Fait generic1.
     *
     * @var string
     */
    private $faitGeneric1;

    /**
     * Get the fait generic1.
     *
     * @return string Returns the fait generic1.
     */
    public function getFaitGeneric1() {
        return $this->faitGeneric1;
    }

    /**
     * Set the fait generic1.
     *
     * @param string $faitGeneric1 The fait generic1.
     */
    public function setFaitGeneric1($faitGeneric1) {
        $this->faitGeneric1 = $faitGeneric1;
        return $this;
    }
}
