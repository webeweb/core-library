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
 * Nb jour normaux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJourNormauxTrait {

    /**
     * Nb jour normaux.
     *
     * @var float
     */
    private $nbJourNormaux;

    /**
     * Get the nb jour normaux.
     *
     * @return float Returns the nb jour normaux.
     */
    public function getNbJourNormaux() {
        return $this->nbJourNormaux;
    }

    /**
     * Set the nb jour normaux.
     *
     * @param float $nbJourNormaux The nb jour normaux.
     */
    public function setNbJourNormaux($nbJourNormaux) {
        $this->nbJourNormaux = $nbJourNormaux;
        return $this;
    }
}
