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
 * Salaire retabli dsn force trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSalaireRetabliDsnForceTrait {

    /**
     * Salaire retabli dsn force.
     *
     * @var bool
     */
    private $salaireRetabliDsnForce;

    /**
     * Get the salaire retabli dsn force.
     *
     * @return bool Returns the salaire retabli dsn force.
     */
    public function getSalaireRetabliDsnForce() {
        return $this->salaireRetabliDsnForce;
    }

    /**
     * Set the salaire retabli dsn force.
     *
     * @param bool $salaireRetabliDsnForce The salaire retabli dsn force.
     */
    public function setSalaireRetabliDsnForce($salaireRetabliDsnForce) {
        $this->salaireRetabliDsnForce = $salaireRetabliDsnForce;
        return $this;
    }
}
