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
 * Defaut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDefautTrait {

    /**
     * Defaut.
     *
     * @var bool
     */
    private $defaut;

    /**
     * Get the defaut.
     *
     * @return bool Returns the defaut.
     */
    public function getDefaut() {
        return $this->defaut;
    }

    /**
     * Set the defaut.
     *
     * @param bool $defaut The defaut.
     */
    public function setDefaut($defaut) {
        $this->defaut = $defaut;
        return $this;
    }
}
