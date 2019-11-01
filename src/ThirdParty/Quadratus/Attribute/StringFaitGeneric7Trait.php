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
 * Fait generic7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitGeneric7Trait {

    /**
     * Fait generic7.
     *
     * @var string
     */
    private $faitGeneric7;

    /**
     * Get the fait generic7.
     *
     * @return string Returns the fait generic7.
     */
    public function getFaitGeneric7() {
        return $this->faitGeneric7;
    }

    /**
     * Set the fait generic7.
     *
     * @param string $faitGeneric7 The fait generic7.
     */
    public function setFaitGeneric7($faitGeneric7) {
        $this->faitGeneric7 = $faitGeneric7;
        return $this;
    }
}
