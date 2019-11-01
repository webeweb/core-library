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
 * Nbr actes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbrActesTrait {

    /**
     * Nbr actes.
     *
     * @var float
     */
    private $nbrActes;

    /**
     * Get the nbr actes.
     *
     * @return float Returns the nbr actes.
     */
    public function getNbrActes() {
        return $this->nbrActes;
    }

    /**
     * Set the nbr actes.
     *
     * @param float $nbrActes The nbr actes.
     */
    public function setNbrActes($nbrActes) {
        $this->nbrActes = $nbrActes;
        return $this;
    }
}
