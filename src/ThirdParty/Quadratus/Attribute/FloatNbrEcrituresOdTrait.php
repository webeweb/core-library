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
 * Nbr ecritures od trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbrEcrituresOdTrait {

    /**
     * Nbr ecritures od.
     *
     * @var float
     */
    private $nbrEcrituresOd;

    /**
     * Get the nbr ecritures od.
     *
     * @return float Returns the nbr ecritures od.
     */
    public function getNbrEcrituresOd() {
        return $this->nbrEcrituresOd;
    }

    /**
     * Set the nbr ecritures od.
     *
     * @param float $nbrEcrituresOd The nbr ecritures od.
     */
    public function setNbrEcrituresOd($nbrEcrituresOd) {
        $this->nbrEcrituresOd = $nbrEcrituresOd;
        return $this;
    }
}
