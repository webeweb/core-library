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
 * Nbr ecritures depenses trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbrEcrituresDepensesTrait {

    /**
     * Nbr ecritures depenses.
     *
     * @var float
     */
    private $nbrEcrituresDepenses;

    /**
     * Get the nbr ecritures depenses.
     *
     * @return float Returns the nbr ecritures depenses.
     */
    public function getNbrEcrituresDepenses() {
        return $this->nbrEcrituresDepenses;
    }

    /**
     * Set the nbr ecritures depenses.
     *
     * @param float $nbrEcrituresDepenses The nbr ecritures depenses.
     */
    public function setNbrEcrituresDepenses($nbrEcrituresDepenses) {
        $this->nbrEcrituresDepenses = $nbrEcrituresDepenses;
        return $this;
    }
}
