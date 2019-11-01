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
 * Modele facture manuelle spe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeleFactureManuelleSpeTrait {

    /**
     * Modele facture manuelle spe.
     *
     * @var string
     */
    private $modeleFactureManuelleSpe;

    /**
     * Get the modele facture manuelle spe.
     *
     * @return string Returns the modele facture manuelle spe.
     */
    public function getModeleFactureManuelleSpe() {
        return $this->modeleFactureManuelleSpe;
    }

    /**
     * Set the modele facture manuelle spe.
     *
     * @param string $modeleFactureManuelleSpe The modele facture manuelle spe.
     */
    public function setModeleFactureManuelleSpe($modeleFactureManuelleSpe) {
        $this->modeleFactureManuelleSpe = $modeleFactureManuelleSpe;
        return $this;
    }
}
