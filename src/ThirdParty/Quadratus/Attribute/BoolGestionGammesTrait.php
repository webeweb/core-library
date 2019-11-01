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
 * Gestion gammes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionGammesTrait {

    /**
     * Gestion gammes.
     *
     * @var bool
     */
    private $gestionGammes;

    /**
     * Get the gestion gammes.
     *
     * @return bool Returns the gestion gammes.
     */
    public function getGestionGammes() {
        return $this->gestionGammes;
    }

    /**
     * Set the gestion gammes.
     *
     * @param bool $gestionGammes The gestion gammes.
     */
    public function setGestionGammes($gestionGammes) {
        $this->gestionGammes = $gestionGammes;
        return $this;
    }
}
