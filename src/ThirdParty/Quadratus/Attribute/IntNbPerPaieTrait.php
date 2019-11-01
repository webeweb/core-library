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
 * Nb per paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbPerPaieTrait {

    /**
     * Nb per paie.
     *
     * @var int
     */
    private $nbPerPaie;

    /**
     * Get the nb per paie.
     *
     * @return int Returns the nb per paie.
     */
    public function getNbPerPaie() {
        return $this->nbPerPaie;
    }

    /**
     * Set the nb per paie.
     *
     * @param int $nbPerPaie The nb per paie.
     */
    public function setNbPerPaie($nbPerPaie) {
        $this->nbPerPaie = $nbPerPaie;
        return $this;
    }
}
