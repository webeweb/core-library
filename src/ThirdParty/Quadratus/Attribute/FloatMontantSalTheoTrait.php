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
 * Montant sal theo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantSalTheoTrait {

    /**
     * Montant sal theo.
     *
     * @var float
     */
    private $montantSalTheo;

    /**
     * Get the montant sal theo.
     *
     * @return float Returns the montant sal theo.
     */
    public function getMontantSalTheo() {
        return $this->montantSalTheo;
    }

    /**
     * Set the montant sal theo.
     *
     * @param float $montantSalTheo The montant sal theo.
     */
    public function setMontantSalTheo($montantSalTheo) {
        $this->montantSalTheo = $montantSalTheo;
        return $this;
    }
}
