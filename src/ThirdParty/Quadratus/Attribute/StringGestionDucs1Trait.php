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
 * Gestion ducs1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGestionDucs1Trait {

    /**
     * Gestion ducs1.
     *
     * @var string
     */
    private $gestionDucs1;

    /**
     * Get the gestion ducs1.
     *
     * @return string Returns the gestion ducs1.
     */
    public function getGestionDucs1() {
        return $this->gestionDucs1;
    }

    /**
     * Set the gestion ducs1.
     *
     * @param string $gestionDucs1 The gestion ducs1.
     */
    public function setGestionDucs1($gestionDucs1) {
        $this->gestionDucs1 = $gestionDucs1;
        return $this;
    }
}
