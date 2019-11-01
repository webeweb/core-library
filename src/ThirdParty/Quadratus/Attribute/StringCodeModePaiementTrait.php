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
 * Code mode paiement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeModePaiementTrait {

    /**
     * Code mode paiement.
     *
     * @var string
     */
    private $codeModePaiement;

    /**
     * Get the code mode paiement.
     *
     * @return string Returns the code mode paiement.
     */
    public function getCodeModePaiement() {
        return $this->codeModePaiement;
    }

    /**
     * Set the code mode paiement.
     *
     * @param string $codeModePaiement The code mode paiement.
     */
    public function setCodeModePaiement($codeModePaiement) {
        $this->codeModePaiement = $codeModePaiement;
        return $this;
    }
}
