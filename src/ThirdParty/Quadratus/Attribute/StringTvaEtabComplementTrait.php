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
 * Tva etab complement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaEtabComplementTrait {

    /**
     * Tva etab complement.
     *
     * @var string
     */
    private $tvaEtabComplement;

    /**
     * Get the tva etab complement.
     *
     * @return string Returns the tva etab complement.
     */
    public function getTvaEtabComplement() {
        return $this->tvaEtabComplement;
    }

    /**
     * Set the tva etab complement.
     *
     * @param string $tvaEtabComplement The tva etab complement.
     */
    public function setTvaEtabComplement($tvaEtabComplement) {
        $this->tvaEtabComplement = $tvaEtabComplement;
        return $this;
    }
}
