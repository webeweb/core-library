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
 * Rib titulaire2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRibTitulaire2Trait {

    /**
     * Rib titulaire2.
     *
     * @var string
     */
    private $ribTitulaire2;

    /**
     * Get the rib titulaire2.
     *
     * @return string Returns the rib titulaire2.
     */
    public function getRibTitulaire2() {
        return $this->ribTitulaire2;
    }

    /**
     * Set the rib titulaire2.
     *
     * @param string $ribTitulaire2 The rib titulaire2.
     */
    public function setRibTitulaire2($ribTitulaire2) {
        $this->ribTitulaire2 = $ribTitulaire2;
        return $this;
    }
}
