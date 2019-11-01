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
 * Nb jour annee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJourAnneeTrait {

    /**
     * Nb jour annee.
     *
     * @var float
     */
    private $nbJourAnnee;

    /**
     * Get the nb jour annee.
     *
     * @return float Returns the nb jour annee.
     */
    public function getNbJourAnnee() {
        return $this->nbJourAnnee;
    }

    /**
     * Set the nb jour annee.
     *
     * @param float $nbJourAnnee The nb jour annee.
     */
    public function setNbJourAnnee($nbJourAnnee) {
        $this->nbJourAnnee = $nbJourAnnee;
        return $this;
    }
}
