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
 * Trs modele facture spe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsModeleFactureSpeTrait {

    /**
     * Trs modele facture spe.
     *
     * @var string
     */
    private $trsModeleFactureSpe;

    /**
     * Get the trs modele facture spe.
     *
     * @return string Returns the trs modele facture spe.
     */
    public function getTrsModeleFactureSpe() {
        return $this->trsModeleFactureSpe;
    }

    /**
     * Set the trs modele facture spe.
     *
     * @param string $trsModeleFactureSpe The trs modele facture spe.
     */
    public function setTrsModeleFactureSpe($trsModeleFactureSpe) {
        $this->trsModeleFactureSpe = $trsModeleFactureSpe;
        return $this;
    }
}
