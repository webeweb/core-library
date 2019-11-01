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
 * Modele facture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeleFactureTrait {

    /**
     * Modele facture.
     *
     * @var string
     */
    private $modeleFacture;

    /**
     * Get the modele facture.
     *
     * @return string Returns the modele facture.
     */
    public function getModeleFacture() {
        return $this->modeleFacture;
    }

    /**
     * Set the modele facture.
     *
     * @param string $modeleFacture The modele facture.
     */
    public function setModeleFacture($modeleFacture) {
        $this->modeleFacture = $modeleFacture;
        return $this;
    }
}
