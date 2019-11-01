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
 * Nbr heures trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbrHeuresTrait {

    /**
     * Nbr heures.
     *
     * @var float
     */
    private $nbrHeures;

    /**
     * Get the nbr heures.
     *
     * @return float Returns the nbr heures.
     */
    public function getNbrHeures() {
        return $this->nbrHeures;
    }

    /**
     * Set the nbr heures.
     *
     * @param float $nbrHeures The nbr heures.
     */
    public function setNbrHeures($nbrHeures) {
        $this->nbrHeures = $nbrHeures;
        return $this;
    }
}
