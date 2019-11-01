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
 * Exo h code4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringExoHCode4Trait {

    /**
     * Exo h code4.
     *
     * @var string
     */
    private $exoHCode4;

    /**
     * Get the exo h code4.
     *
     * @return string Returns the exo h code4.
     */
    public function getExoHCode4() {
        return $this->exoHCode4;
    }

    /**
     * Set the exo h code4.
     *
     * @param string $exoHCode4 The exo h code4.
     */
    public function setExoHCode4($exoHCode4) {
        $this->exoHCode4 = $exoHCode4;
        return $this;
    }
}
