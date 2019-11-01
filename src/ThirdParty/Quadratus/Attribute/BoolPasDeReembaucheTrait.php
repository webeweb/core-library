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
 * Pas de reembauche trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasDeReembaucheTrait {

    /**
     * Pas de reembauche.
     *
     * @var bool
     */
    private $pasDeReembauche;

    /**
     * Get the pas de reembauche.
     *
     * @return bool Returns the pas de reembauche.
     */
    public function getPasDeReembauche() {
        return $this->pasDeReembauche;
    }

    /**
     * Set the pas de reembauche.
     *
     * @param bool $pasDeReembauche The pas de reembauche.
     */
    public function setPasDeReembauche($pasDeReembauche) {
        $this->pasDeReembauche = $pasDeReembauche;
        return $this;
    }
}
