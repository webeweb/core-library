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
 * Tva etab num voie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaEtabNumVoieTrait {

    /**
     * Tva etab num voie.
     *
     * @var string
     */
    private $tvaEtabNumVoie;

    /**
     * Get the tva etab num voie.
     *
     * @return string Returns the tva etab num voie.
     */
    public function getTvaEtabNumVoie() {
        return $this->tvaEtabNumVoie;
    }

    /**
     * Set the tva etab num voie.
     *
     * @param string $tvaEtabNumVoie The tva etab num voie.
     */
    public function setTvaEtabNumVoie($tvaEtabNumVoie) {
        $this->tvaEtabNumVoie = $tvaEtabNumVoie;
        return $this;
    }
}
