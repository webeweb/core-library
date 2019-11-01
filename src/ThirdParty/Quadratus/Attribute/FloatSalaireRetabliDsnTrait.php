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
 * Salaire retabli dsn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSalaireRetabliDsnTrait {

    /**
     * Salaire retabli dsn.
     *
     * @var float
     */
    private $salaireRetabliDsn;

    /**
     * Get the salaire retabli dsn.
     *
     * @return float Returns the salaire retabli dsn.
     */
    public function getSalaireRetabliDsn() {
        return $this->salaireRetabliDsn;
    }

    /**
     * Set the salaire retabli dsn.
     *
     * @param float $salaireRetabliDsn The salaire retabli dsn.
     */
    public function setSalaireRetabliDsn($salaireRetabliDsn) {
        $this->salaireRetabliDsn = $salaireRetabliDsn;
        return $this;
    }
}
