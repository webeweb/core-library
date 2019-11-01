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
 * Tva etab bureau distributeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaEtabBureauDistributeurTrait {

    /**
     * Tva etab bureau distributeur.
     *
     * @var string
     */
    private $tvaEtabBureauDistributeur;

    /**
     * Get the tva etab bureau distributeur.
     *
     * @return string Returns the tva etab bureau distributeur.
     */
    public function getTvaEtabBureauDistributeur() {
        return $this->tvaEtabBureauDistributeur;
    }

    /**
     * Set the tva etab bureau distributeur.
     *
     * @param string $tvaEtabBureauDistributeur The tva etab bureau distributeur.
     */
    public function setTvaEtabBureauDistributeur($tvaEtabBureauDistributeur) {
        $this->tvaEtabBureauDistributeur = $tvaEtabBureauDistributeur;
        return $this;
    }
}
