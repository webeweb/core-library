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
 * Nbr employes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbrEmployesTrait {

    /**
     * Nbr employes.
     *
     * @var float
     */
    private $nbrEmployes;

    /**
     * Get the nbr employes.
     *
     * @return float Returns the nbr employes.
     */
    public function getNbrEmployes() {
        return $this->nbrEmployes;
    }

    /**
     * Set the nbr employes.
     *
     * @param float $nbrEmployes The nbr employes.
     */
    public function setNbrEmployes($nbrEmployes) {
        $this->nbrEmployes = $nbrEmployes;
        return $this;
    }
}
