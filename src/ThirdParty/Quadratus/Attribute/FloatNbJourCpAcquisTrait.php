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
 * Nb jour cp acquis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJourCpAcquisTrait {

    /**
     * Nb jour cp acquis.
     *
     * @var float
     */
    private $nbJourCpAcquis;

    /**
     * Get the nb jour cp acquis.
     *
     * @return float Returns the nb jour cp acquis.
     */
    public function getNbJourCpAcquis() {
        return $this->nbJourCpAcquis;
    }

    /**
     * Set the nb jour cp acquis.
     *
     * @param float $nbJourCpAcquis The nb jour cp acquis.
     */
    public function setNbJourCpAcquis($nbJourCpAcquis) {
        $this->nbJourCpAcquis = $nbJourCpAcquis;
        return $this;
    }
}
