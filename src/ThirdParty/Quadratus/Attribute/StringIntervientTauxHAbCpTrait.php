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
 * Intervient taux h ab cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIntervientTauxHAbCpTrait {

    /**
     * Intervient taux h ab cp.
     *
     * @var string
     */
    private $intervientTauxHAbCp;

    /**
     * Get the intervient taux h ab cp.
     *
     * @return string Returns the intervient taux h ab cp.
     */
    public function getIntervientTauxHAbCp() {
        return $this->intervientTauxHAbCp;
    }

    /**
     * Set the intervient taux h ab cp.
     *
     * @param string $intervientTauxHAbCp The intervient taux h ab cp.
     */
    public function setIntervientTauxHAbCp($intervientTauxHAbCp) {
        $this->intervientTauxHAbCp = $intervientTauxHAbCp;
        return $this;
    }
}
