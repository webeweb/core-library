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
 * Echeance nb jours trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEcheanceNbJoursTrait {

    /**
     * Echeance nb jours.
     *
     * @var int
     */
    private $echeanceNbJours;

    /**
     * Get the echeance nb jours.
     *
     * @return int Returns the echeance nb jours.
     */
    public function getEcheanceNbJours() {
        return $this->echeanceNbJours;
    }

    /**
     * Set the echeance nb jours.
     *
     * @param int $echeanceNbJours The echeance nb jours.
     */
    public function setEcheanceNbJours($echeanceNbJours) {
        $this->echeanceNbJours = $echeanceNbJours;
        return $this;
    }
}
