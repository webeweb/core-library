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
 * Motif sortie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMotifSortieTrait {

    /**
     * Motif sortie.
     *
     * @var string
     */
    private $motifSortie;

    /**
     * Get the motif sortie.
     *
     * @return string Returns the motif sortie.
     */
    public function getMotifSortie() {
        return $this->motifSortie;
    }

    /**
     * Set the motif sortie.
     *
     * @param string $motifSortie The motif sortie.
     */
    public function setMotifSortie($motifSortie) {
        $this->motifSortie = $motifSortie;
        return $this;
    }
}
