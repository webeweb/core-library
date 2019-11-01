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
 * Rff interets emprunts trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRffInteretsEmpruntsTrait {

    /**
     * Rff interets emprunts.
     *
     * @var float
     */
    private $rffInteretsEmprunts;

    /**
     * Get the rff interets emprunts.
     *
     * @return float Returns the rff interets emprunts.
     */
    public function getRffInteretsEmprunts() {
        return $this->rffInteretsEmprunts;
    }

    /**
     * Set the rff interets emprunts.
     *
     * @param float $rffInteretsEmprunts The rff interets emprunts.
     */
    public function setRffInteretsEmprunts($rffInteretsEmprunts) {
        $this->rffInteretsEmprunts = $rffInteretsEmprunts;
        return $this;
    }
}
