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
 * Motif entree trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMotifEntreeTrait {

    /**
     * Motif entree.
     *
     * @var string
     */
    private $motifEntree;

    /**
     * Get the motif entree.
     *
     * @return string Returns the motif entree.
     */
    public function getMotifEntree() {
        return $this->motifEntree;
    }

    /**
     * Set the motif entree.
     *
     * @param string $motifEntree The motif entree.
     */
    public function setMotifEntree($motifEntree) {
        $this->motifEntree = $motifEntree;
        return $this;
    }
}
