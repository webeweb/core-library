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
 * Code medecine travail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMedecineTravailTrait {

    /**
     * Code medecine travail.
     *
     * @var string
     */
    private $codeMedecineTravail;

    /**
     * Get the code medecine travail.
     *
     * @return string Returns the code medecine travail.
     */
    public function getCodeMedecineTravail() {
        return $this->codeMedecineTravail;
    }

    /**
     * Set the code medecine travail.
     *
     * @param string $codeMedecineTravail The code medecine travail.
     */
    public function setCodeMedecineTravail($codeMedecineTravail) {
        $this->codeMedecineTravail = $codeMedecineTravail;
        return $this;
    }
}
