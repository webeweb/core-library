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
 * Titulaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTitulaireTrait {

    /**
     * Titulaire.
     *
     * @var bool
     */
    private $titulaire;

    /**
     * Get the titulaire.
     *
     * @return bool Returns the titulaire.
     */
    public function getTitulaire() {
        return $this->titulaire;
    }

    /**
     * Set the titulaire.
     *
     * @param bool $titulaire The titulaire.
     */
    public function setTitulaire($titulaire) {
        $this->titulaire = $titulaire;
        return $this;
    }
}
