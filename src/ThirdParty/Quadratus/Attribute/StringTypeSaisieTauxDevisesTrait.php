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
 * Type saisie taux devises trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeSaisieTauxDevisesTrait {

    /**
     * Type saisie taux devises.
     *
     * @var string
     */
    private $typeSaisieTauxDevises;

    /**
     * Get the type saisie taux devises.
     *
     * @return string Returns the type saisie taux devises.
     */
    public function getTypeSaisieTauxDevises() {
        return $this->typeSaisieTauxDevises;
    }

    /**
     * Set the type saisie taux devises.
     *
     * @param string $typeSaisieTauxDevises The type saisie taux devises.
     */
    public function setTypeSaisieTauxDevises($typeSaisieTauxDevises) {
        $this->typeSaisieTauxDevises = $typeSaisieTauxDevises;
        return $this;
    }
}
