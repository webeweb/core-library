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
 * Alsace moselle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAlsaceMoselleTrait {

    /**
     * Alsace moselle.
     *
     * @var bool
     */
    private $alsaceMoselle;

    /**
     * Get the alsace moselle.
     *
     * @return bool Returns the alsace moselle.
     */
    public function getAlsaceMoselle() {
        return $this->alsaceMoselle;
    }

    /**
     * Set the alsace moselle.
     *
     * @param bool $alsaceMoselle The alsace moselle.
     */
    public function setAlsaceMoselle($alsaceMoselle) {
        $this->alsaceMoselle = $alsaceMoselle;
        return $this;
    }
}
