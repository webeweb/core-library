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
 * Vir fonction publique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVirFonctionPubliqueTrait {

    /**
     * Vir fonction publique.
     *
     * @var bool
     */
    private $virFonctionPublique;

    /**
     * Get the vir fonction publique.
     *
     * @return bool Returns the vir fonction publique.
     */
    public function getVirFonctionPublique() {
        return $this->virFonctionPublique;
    }

    /**
     * Set the vir fonction publique.
     *
     * @param bool $virFonctionPublique The vir fonction publique.
     */
    public function setVirFonctionPublique($virFonctionPublique) {
        $this->virFonctionPublique = $virFonctionPublique;
        return $this;
    }
}
