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
 * Taux horaire bt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxHoraireBtTrait {

    /**
     * Taux horaire bt.
     *
     * @var float
     */
    private $tauxHoraireBt;

    /**
     * Get the taux horaire bt.
     *
     * @return float Returns the taux horaire bt.
     */
    public function getTauxHoraireBt() {
        return $this->tauxHoraireBt;
    }

    /**
     * Set the taux horaire bt.
     *
     * @param float $tauxHoraireBt The taux horaire bt.
     */
    public function setTauxHoraireBt($tauxHoraireBt) {
        $this->tauxHoraireBt = $tauxHoraireBt;
        return $this;
    }
}
