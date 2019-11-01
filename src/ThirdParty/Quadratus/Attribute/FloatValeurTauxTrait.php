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
 * Valeur taux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeurTauxTrait {

    /**
     * Valeur taux.
     *
     * @var float
     */
    private $valeurTaux;

    /**
     * Get the valeur taux.
     *
     * @return float Returns the valeur taux.
     */
    public function getValeurTaux() {
        return $this->valeurTaux;
    }

    /**
     * Set the valeur taux.
     *
     * @param float $valeurTaux The valeur taux.
     */
    public function setValeurTaux($valeurTaux) {
        $this->valeurTaux = $valeurTaux;
        return $this;
    }
}
