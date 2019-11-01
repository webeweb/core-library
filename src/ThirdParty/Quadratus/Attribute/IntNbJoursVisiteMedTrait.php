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
 * Nb jours visite med trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbJoursVisiteMedTrait {

    /**
     * Nb jours visite med.
     *
     * @var int
     */
    private $nbJoursVisiteMed;

    /**
     * Get the nb jours visite med.
     *
     * @return int Returns the nb jours visite med.
     */
    public function getNbJoursVisiteMed() {
        return $this->nbJoursVisiteMed;
    }

    /**
     * Set the nb jours visite med.
     *
     * @param int $nbJoursVisiteMed The nb jours visite med.
     */
    public function setNbJoursVisiteMed($nbJoursVisiteMed) {
        $this->nbJoursVisiteMed = $nbJoursVisiteMed;
        return $this;
    }
}
