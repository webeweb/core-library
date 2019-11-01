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
 * Medecin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMedecinTrait {

    /**
     * Medecin.
     *
     * @var string
     */
    private $medecin;

    /**
     * Get the medecin.
     *
     * @return string Returns the medecin.
     */
    public function getMedecin() {
        return $this->medecin;
    }

    /**
     * Set the medecin.
     *
     * @param string $medecin The medecin.
     */
    public function setMedecin($medecin) {
        $this->medecin = $medecin;
        return $this;
    }
}
