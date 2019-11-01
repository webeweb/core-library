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
 * Dads dernier choix gestion aen trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDadsDernierChoixGestionAenTrait {

    /**
     * Dads dernier choix gestion aen.
     *
     * @var string
     */
    private $dadsDernierChoixGestionAen;

    /**
     * Get the dads dernier choix gestion aen.
     *
     * @return string Returns the dads dernier choix gestion aen.
     */
    public function getDadsDernierChoixGestionAen() {
        return $this->dadsDernierChoixGestionAen;
    }

    /**
     * Set the dads dernier choix gestion aen.
     *
     * @param string $dadsDernierChoixGestionAen The dads dernier choix gestion aen.
     */
    public function setDadsDernierChoixGestionAen($dadsDernierChoixGestionAen) {
        $this->dadsDernierChoixGestionAen = $dadsDernierChoixGestionAen;
        return $this;
    }
}
