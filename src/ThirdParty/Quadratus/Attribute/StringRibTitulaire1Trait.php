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
 * Rib titulaire1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRibTitulaire1Trait {

    /**
     * Rib titulaire1.
     *
     * @var string
     */
    private $ribTitulaire1;

    /**
     * Get the rib titulaire1.
     *
     * @return string Returns the rib titulaire1.
     */
    public function getRibTitulaire1() {
        return $this->ribTitulaire1;
    }

    /**
     * Set the rib titulaire1.
     *
     * @param string $ribTitulaire1 The rib titulaire1.
     */
    public function setRibTitulaire1($ribTitulaire1) {
        $this->ribTitulaire1 = $ribTitulaire1;
        return $this;
    }
}
