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
 * Medecin responsable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMedecinResponsableTrait {

    /**
     * Medecin responsable.
     *
     * @var string
     */
    private $medecinResponsable;

    /**
     * Get the medecin responsable.
     *
     * @return string Returns the medecin responsable.
     */
    public function getMedecinResponsable() {
        return $this->medecinResponsable;
    }

    /**
     * Set the medecin responsable.
     *
     * @param string $medecinResponsable The medecin responsable.
     */
    public function setMedecinResponsable($medecinResponsable) {
        $this->medecinResponsable = $medecinResponsable;
        return $this;
    }
}
