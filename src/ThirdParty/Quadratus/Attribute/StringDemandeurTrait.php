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
 * Demandeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDemandeurTrait {

    /**
     * Demandeur.
     *
     * @var string
     */
    private $demandeur;

    /**
     * Get the demandeur.
     *
     * @return string Returns the demandeur.
     */
    public function getDemandeur() {
        return $this->demandeur;
    }

    /**
     * Set the demandeur.
     *
     * @param string $demandeur The demandeur.
     */
    public function setDemandeur($demandeur) {
        $this->demandeur = $demandeur;
        return $this;
    }
}
