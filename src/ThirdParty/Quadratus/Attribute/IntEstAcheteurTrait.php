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
 * Est acheteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEstAcheteurTrait {

    /**
     * Est acheteur.
     *
     * @var int
     */
    private $estAcheteur;

    /**
     * Get the est acheteur.
     *
     * @return int Returns the est acheteur.
     */
    public function getEstAcheteur() {
        return $this->estAcheteur;
    }

    /**
     * Set the est acheteur.
     *
     * @param int $estAcheteur The est acheteur.
     */
    public function setEstAcheteur($estAcheteur) {
        $this->estAcheteur = $estAcheteur;
        return $this;
    }
}
