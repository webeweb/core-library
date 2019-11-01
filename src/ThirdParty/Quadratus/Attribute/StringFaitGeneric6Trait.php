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
 * Fait generic6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitGeneric6Trait {

    /**
     * Fait generic6.
     *
     * @var string
     */
    private $faitGeneric6;

    /**
     * Get the fait generic6.
     *
     * @return string Returns the fait generic6.
     */
    public function getFaitGeneric6() {
        return $this->faitGeneric6;
    }

    /**
     * Set the fait generic6.
     *
     * @param string $faitGeneric6 The fait generic6.
     */
    public function setFaitGeneric6($faitGeneric6) {
        $this->faitGeneric6 = $faitGeneric6;
        return $this;
    }
}
