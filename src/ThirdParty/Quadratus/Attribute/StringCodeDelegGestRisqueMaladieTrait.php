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
 * Code deleg gest risque maladie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeDelegGestRisqueMaladieTrait {

    /**
     * Code deleg gest risque maladie.
     *
     * @var string
     */
    private $codeDelegGestRisqueMaladie;

    /**
     * Get the code deleg gest risque maladie.
     *
     * @return string Returns the code deleg gest risque maladie.
     */
    public function getCodeDelegGestRisqueMaladie() {
        return $this->codeDelegGestRisqueMaladie;
    }

    /**
     * Set the code deleg gest risque maladie.
     *
     * @param string $codeDelegGestRisqueMaladie The code deleg gest risque maladie.
     */
    public function setCodeDelegGestRisqueMaladie($codeDelegGestRisqueMaladie) {
        $this->codeDelegGestRisqueMaladie = $codeDelegGestRisqueMaladie;
        return $this;
    }
}
