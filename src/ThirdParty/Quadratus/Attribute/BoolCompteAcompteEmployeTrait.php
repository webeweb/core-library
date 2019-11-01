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
 * Compte acompte employe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCompteAcompteEmployeTrait {

    /**
     * Compte acompte employe.
     *
     * @var bool
     */
    private $compteAcompteEmploye;

    /**
     * Get the compte acompte employe.
     *
     * @return bool Returns the compte acompte employe.
     */
    public function getCompteAcompteEmploye() {
        return $this->compteAcompteEmploye;
    }

    /**
     * Set the compte acompte employe.
     *
     * @param bool $compteAcompteEmploye The compte acompte employe.
     */
    public function setCompteAcompteEmploye($compteAcompteEmploye) {
        $this->compteAcompteEmploye = $compteAcompteEmploye;
        return $this;
    }
}
