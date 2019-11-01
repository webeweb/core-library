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
 * Responsable chantier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringResponsableChantierTrait {

    /**
     * Responsable chantier.
     *
     * @var string
     */
    private $responsableChantier;

    /**
     * Get the responsable chantier.
     *
     * @return string Returns the responsable chantier.
     */
    public function getResponsableChantier() {
        return $this->responsableChantier;
    }

    /**
     * Set the responsable chantier.
     *
     * @param string $responsableChantier The responsable chantier.
     */
    public function setResponsableChantier($responsableChantier) {
        $this->responsableChantier = $responsableChantier;
        return $this;
    }
}
