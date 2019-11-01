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
 * Label prestataire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLabelPrestataireTrait {

    /**
     * Label prestataire.
     *
     * @var bool
     */
    private $labelPrestataire;

    /**
     * Get the label prestataire.
     *
     * @return bool Returns the label prestataire.
     */
    public function getLabelPrestataire() {
        return $this->labelPrestataire;
    }

    /**
     * Set the label prestataire.
     *
     * @param bool $labelPrestataire The label prestataire.
     */
    public function setLabelPrestataire($labelPrestataire) {
        $this->labelPrestataire = $labelPrestataire;
        return $this;
    }
}
