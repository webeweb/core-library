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
 * Code titulaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTitulaireTrait {

    /**
     * Code titulaire.
     *
     * @var string
     */
    private $codeTitulaire;

    /**
     * Get the code titulaire.
     *
     * @return string Returns the code titulaire.
     */
    public function getCodeTitulaire() {
        return $this->codeTitulaire;
    }

    /**
     * Set the code titulaire.
     *
     * @param string $codeTitulaire The code titulaire.
     */
    public function setCodeTitulaire($codeTitulaire) {
        $this->codeTitulaire = $codeTitulaire;
        return $this;
    }
}
