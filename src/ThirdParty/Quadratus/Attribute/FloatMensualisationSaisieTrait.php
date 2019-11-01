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
 * Mensualisation saisie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMensualisationSaisieTrait {

    /**
     * Mensualisation saisie.
     *
     * @var float
     */
    private $mensualisationSaisie;

    /**
     * Get the mensualisation saisie.
     *
     * @return float Returns the mensualisation saisie.
     */
    public function getMensualisationSaisie() {
        return $this->mensualisationSaisie;
    }

    /**
     * Set the mensualisation saisie.
     *
     * @param float $mensualisationSaisie The mensualisation saisie.
     */
    public function setMensualisationSaisie($mensualisationSaisie) {
        $this->mensualisationSaisie = $mensualisationSaisie;
        return $this;
    }
}
