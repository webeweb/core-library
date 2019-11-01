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
 * Code droit contrat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeDroitContratTrait {

    /**
     * Code droit contrat.
     *
     * @var string
     */
    private $codeDroitContrat;

    /**
     * Get the code droit contrat.
     *
     * @return string Returns the code droit contrat.
     */
    public function getCodeDroitContrat() {
        return $this->codeDroitContrat;
    }

    /**
     * Set the code droit contrat.
     *
     * @param string $codeDroitContrat The code droit contrat.
     */
    public function setCodeDroitContrat($codeDroitContrat) {
        $this->codeDroitContrat = $codeDroitContrat;
        return $this;
    }
}
