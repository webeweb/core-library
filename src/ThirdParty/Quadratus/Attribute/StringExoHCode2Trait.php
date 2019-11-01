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
 * Exo h code2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringExoHCode2Trait {

    /**
     * Exo h code2.
     *
     * @var string
     */
    private $exoHCode2;

    /**
     * Get the exo h code2.
     *
     * @return string Returns the exo h code2.
     */
    public function getExoHCode2() {
        return $this->exoHCode2;
    }

    /**
     * Set the exo h code2.
     *
     * @param string $exoHCode2 The exo h code2.
     */
    public function setExoHCode2($exoHCode2) {
        $this->exoHCode2 = $exoHCode2;
        return $this;
    }
}
