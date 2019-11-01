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
 * Gerer num cpt chantier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGererNumCptChantierTrait {

    /**
     * Gerer num cpt chantier.
     *
     * @var bool
     */
    private $gererNumCptChantier;

    /**
     * Get the gerer num cpt chantier.
     *
     * @return bool Returns the gerer num cpt chantier.
     */
    public function getGererNumCptChantier() {
        return $this->gererNumCptChantier;
    }

    /**
     * Set the gerer num cpt chantier.
     *
     * @param bool $gererNumCptChantier The gerer num cpt chantier.
     */
    public function setGererNumCptChantier($gererNumCptChantier) {
        $this->gererNumCptChantier = $gererNumCptChantier;
        return $this;
    }
}
