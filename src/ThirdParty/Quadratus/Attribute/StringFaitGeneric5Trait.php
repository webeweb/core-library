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
 * Fait generic5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitGeneric5Trait {

    /**
     * Fait generic5.
     *
     * @var string
     */
    private $faitGeneric5;

    /**
     * Get the fait generic5.
     *
     * @return string Returns the fait generic5.
     */
    public function getFaitGeneric5() {
        return $this->faitGeneric5;
    }

    /**
     * Set the fait generic5.
     *
     * @param string $faitGeneric5 The fait generic5.
     */
    public function setFaitGeneric5($faitGeneric5) {
        $this->faitGeneric5 = $faitGeneric5;
        return $this;
    }
}
