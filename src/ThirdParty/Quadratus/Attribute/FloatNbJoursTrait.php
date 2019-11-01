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
 * Nb jours trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJoursTrait {

    /**
     * Nb jours.
     *
     * @var float
     */
    private $nbJours;

    /**
     * Get the nb jours.
     *
     * @return float Returns the nb jours.
     */
    public function getNbJours() {
        return $this->nbJours;
    }

    /**
     * Set the nb jours.
     *
     * @param float $nbJours The nb jours.
     */
    public function setNbJours($nbJours) {
        $this->nbJours = $nbJours;
        return $this;
    }
}
