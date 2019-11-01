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
 * Annulation chantier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAnnulationChantierTrait {

    /**
     * Annulation chantier.
     *
     * @var bool
     */
    private $annulationChantier;

    /**
     * Get the annulation chantier.
     *
     * @return bool Returns the annulation chantier.
     */
    public function getAnnulationChantier() {
        return $this->annulationChantier;
    }

    /**
     * Set the annulation chantier.
     *
     * @param bool $annulationChantier The annulation chantier.
     */
    public function setAnnulationChantier($annulationChantier) {
        $this->annulationChantier = $annulationChantier;
        return $this;
    }
}
