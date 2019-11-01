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
 * Retenue salaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRetenueSalaireTrait {

    /**
     * Retenue salaire.
     *
     * @var bool
     */
    private $retenueSalaire;

    /**
     * Get the retenue salaire.
     *
     * @return bool Returns the retenue salaire.
     */
    public function getRetenueSalaire() {
        return $this->retenueSalaire;
    }

    /**
     * Set the retenue salaire.
     *
     * @param bool $retenueSalaire The retenue salaire.
     */
    public function setRetenueSalaire($retenueSalaire) {
        $this->retenueSalaire = $retenueSalaire;
        return $this;
    }
}
