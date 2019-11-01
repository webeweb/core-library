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
 * Base ss plaf modif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBaseSsPlafModifTrait {

    /**
     * Base ss plaf modif.
     *
     * @var bool
     */
    private $baseSsPlafModif;

    /**
     * Get the base ss plaf modif.
     *
     * @return bool Returns the base ss plaf modif.
     */
    public function getBaseSsPlafModif() {
        return $this->baseSsPlafModif;
    }

    /**
     * Set the base ss plaf modif.
     *
     * @param bool $baseSsPlafModif The base ss plaf modif.
     */
    public function setBaseSsPlafModif($baseSsPlafModif) {
        $this->baseSsPlafModif = $baseSsPlafModif;
        return $this;
    }
}
