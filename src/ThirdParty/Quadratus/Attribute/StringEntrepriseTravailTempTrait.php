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
 * Entreprise travail temp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEntrepriseTravailTempTrait {

    /**
     * Entreprise travail temp.
     *
     * @var string
     */
    private $entrepriseTravailTemp;

    /**
     * Get the entreprise travail temp.
     *
     * @return string Returns the entreprise travail temp.
     */
    public function getEntrepriseTravailTemp() {
        return $this->entrepriseTravailTemp;
    }

    /**
     * Set the entreprise travail temp.
     *
     * @param string $entrepriseTravailTemp The entreprise travail temp.
     */
    public function setEntrepriseTravailTemp($entrepriseTravailTemp) {
        $this->entrepriseTravailTemp = $entrepriseTravailTemp;
        return $this;
    }
}
