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
 * Montant cotis theo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantCotisTheoTrait {

    /**
     * Montant cotis theo.
     *
     * @var float
     */
    private $montantCotisTheo;

    /**
     * Get the montant cotis theo.
     *
     * @return float Returns the montant cotis theo.
     */
    public function getMontantCotisTheo() {
        return $this->montantCotisTheo;
    }

    /**
     * Set the montant cotis theo.
     *
     * @param float $montantCotisTheo The montant cotis theo.
     */
    public function setMontantCotisTheo($montantCotisTheo) {
        $this->montantCotisTheo = $montantCotisTheo;
        return $this;
    }
}
