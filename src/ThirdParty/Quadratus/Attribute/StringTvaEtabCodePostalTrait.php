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
 * Tva etab code postal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaEtabCodePostalTrait {

    /**
     * Tva etab code postal.
     *
     * @var string
     */
    private $tvaEtabCodePostal;

    /**
     * Get the tva etab code postal.
     *
     * @return string Returns the tva etab code postal.
     */
    public function getTvaEtabCodePostal() {
        return $this->tvaEtabCodePostal;
    }

    /**
     * Set the tva etab code postal.
     *
     * @param string $tvaEtabCodePostal The tva etab code postal.
     */
    public function setTvaEtabCodePostal($tvaEtabCodePostal) {
        $this->tvaEtabCodePostal = $tvaEtabCodePostal;
        return $this;
    }
}
