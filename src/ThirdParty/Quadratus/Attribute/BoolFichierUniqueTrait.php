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
 * Fichier unique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFichierUniqueTrait {

    /**
     * Fichier unique.
     *
     * @var bool
     */
    private $fichierUnique;

    /**
     * Get the fichier unique.
     *
     * @return bool Returns the fichier unique.
     */
    public function getFichierUnique() {
        return $this->fichierUnique;
    }

    /**
     * Set the fichier unique.
     *
     * @param bool $fichierUnique The fichier unique.
     */
    public function setFichierUnique($fichierUnique) {
        $this->fichierUnique = $fichierUnique;
        return $this;
    }
}
