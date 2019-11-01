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
 * Gestion jfnt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionJfntTrait {

    /**
     * Gestion jfnt.
     *
     * @var bool
     */
    private $gestionJfnt;

    /**
     * Get the gestion jfnt.
     *
     * @return bool Returns the gestion jfnt.
     */
    public function getGestionJfnt() {
        return $this->gestionJfnt;
    }

    /**
     * Set the gestion jfnt.
     *
     * @param bool $gestionJfnt The gestion jfnt.
     */
    public function setGestionJfnt($gestionJfnt) {
        $this->gestionJfnt = $gestionJfnt;
        return $this;
    }
}
