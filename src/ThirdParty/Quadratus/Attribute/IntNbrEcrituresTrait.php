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
 * Nbr ecritures trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbrEcrituresTrait {

    /**
     * Nbr ecritures.
     *
     * @var int
     */
    private $nbrEcritures;

    /**
     * Get the nbr ecritures.
     *
     * @return int Returns the nbr ecritures.
     */
    public function getNbrEcritures() {
        return $this->nbrEcritures;
    }

    /**
     * Set the nbr ecritures.
     *
     * @param int $nbrEcritures The nbr ecritures.
     */
    public function setNbrEcritures($nbrEcritures) {
        $this->nbrEcritures = $nbrEcritures;
        return $this;
    }
}
