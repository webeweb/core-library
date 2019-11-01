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
 * Prenom responsable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrenomResponsableTrait {

    /**
     * Prenom responsable.
     *
     * @var string
     */
    private $prenomResponsable;

    /**
     * Get the prenom responsable.
     *
     * @return string Returns the prenom responsable.
     */
    public function getPrenomResponsable() {
        return $this->prenomResponsable;
    }

    /**
     * Set the prenom responsable.
     *
     * @param string $prenomResponsable The prenom responsable.
     */
    public function setPrenomResponsable($prenomResponsable) {
        $this->prenomResponsable = $prenomResponsable;
        return $this;
    }
}
