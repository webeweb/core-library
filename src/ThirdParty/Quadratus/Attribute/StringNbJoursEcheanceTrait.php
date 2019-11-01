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
 * Nb jours echeance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbJoursEcheanceTrait {

    /**
     * Nb jours echeance.
     *
     * @var string
     */
    private $nbJoursEcheance;

    /**
     * Get the nb jours echeance.
     *
     * @return string Returns the nb jours echeance.
     */
    public function getNbJoursEcheance() {
        return $this->nbJoursEcheance;
    }

    /**
     * Set the nb jours echeance.
     *
     * @param string $nbJoursEcheance The nb jours echeance.
     */
    public function setNbJoursEcheance($nbJoursEcheance) {
        $this->nbJoursEcheance = $nbJoursEcheance;
        return $this;
    }
}
