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
 * Tva etab nom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaEtabNomTrait {

    /**
     * Tva etab nom.
     *
     * @var string
     */
    private $tvaEtabNom;

    /**
     * Get the tva etab nom.
     *
     * @return string Returns the tva etab nom.
     */
    public function getTvaEtabNom() {
        return $this->tvaEtabNom;
    }

    /**
     * Set the tva etab nom.
     *
     * @param string $tvaEtabNom The tva etab nom.
     */
    public function setTvaEtabNom($tvaEtabNom) {
        $this->tvaEtabNom = $tvaEtabNom;
        return $this;
    }
}
