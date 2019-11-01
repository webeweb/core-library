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
 * Tva etab nom voie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaEtabNomVoieTrait {

    /**
     * Tva etab nom voie.
     *
     * @var string
     */
    private $tvaEtabNomVoie;

    /**
     * Get the tva etab nom voie.
     *
     * @return string Returns the tva etab nom voie.
     */
    public function getTvaEtabNomVoie() {
        return $this->tvaEtabNomVoie;
    }

    /**
     * Set the tva etab nom voie.
     *
     * @param string $tvaEtabNomVoie The tva etab nom voie.
     */
    public function setTvaEtabNomVoie($tvaEtabNomVoie) {
        $this->tvaEtabNomVoie = $tvaEtabNomVoie;
        return $this;
    }
}
