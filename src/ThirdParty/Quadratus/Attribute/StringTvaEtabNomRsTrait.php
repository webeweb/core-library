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
 * Tva etab nom rs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaEtabNomRsTrait {

    /**
     * Tva etab nom rs.
     *
     * @var string
     */
    private $tvaEtabNomRs;

    /**
     * Get the tva etab nom rs.
     *
     * @return string Returns the tva etab nom rs.
     */
    public function getTvaEtabNomRs() {
        return $this->tvaEtabNomRs;
    }

    /**
     * Set the tva etab nom rs.
     *
     * @param string $tvaEtabNomRs The tva etab nom rs.
     */
    public function setTvaEtabNomRs($tvaEtabNomRs) {
        $this->tvaEtabNomRs = $tvaEtabNomRs;
        return $this;
    }
}
