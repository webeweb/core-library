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
 * Nom responsable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomResponsableTrait {

    /**
     * Nom responsable.
     *
     * @var string
     */
    private $nomResponsable;

    /**
     * Get the nom responsable.
     *
     * @return string Returns the nom responsable.
     */
    public function getNomResponsable() {
        return $this->nomResponsable;
    }

    /**
     * Set the nom responsable.
     *
     * @param string $nomResponsable The nom responsable.
     */
    public function setNomResponsable($nomResponsable) {
        $this->nomResponsable = $nomResponsable;
        return $this;
    }
}
