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
 * Exo h code3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringExoHCode3Trait {

    /**
     * Exo h code3.
     *
     * @var string
     */
    private $exoHCode3;

    /**
     * Get the exo h code3.
     *
     * @return string Returns the exo h code3.
     */
    public function getExoHCode3() {
        return $this->exoHCode3;
    }

    /**
     * Set the exo h code3.
     *
     * @param string $exoHCode3 The exo h code3.
     */
    public function setExoHCode3($exoHCode3) {
        $this->exoHCode3 = $exoHCode3;
        return $this;
    }
}
