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
 * Acces repertoire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesRepertoireTrait {

    /**
     * Acces repertoire.
     *
     * @var bool
     */
    private $accesRepertoire;

    /**
     * Get the acces repertoire.
     *
     * @return bool Returns the acces repertoire.
     */
    public function getAccesRepertoire() {
        return $this->accesRepertoire;
    }

    /**
     * Set the acces repertoire.
     *
     * @param bool $accesRepertoire The acces repertoire.
     */
    public function setAccesRepertoire($accesRepertoire) {
        $this->accesRepertoire = $accesRepertoire;
        return $this;
    }
}
