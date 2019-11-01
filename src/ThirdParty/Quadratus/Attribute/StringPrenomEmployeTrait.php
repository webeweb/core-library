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
 * Prenom employe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrenomEmployeTrait {

    /**
     * Prenom employe.
     *
     * @var string
     */
    private $prenomEmploye;

    /**
     * Get the prenom employe.
     *
     * @return string Returns the prenom employe.
     */
    public function getPrenomEmploye() {
        return $this->prenomEmploye;
    }

    /**
     * Set the prenom employe.
     *
     * @param string $prenomEmploye The prenom employe.
     */
    public function setPrenomEmploye($prenomEmploye) {
        $this->prenomEmploye = $prenomEmploye;
        return $this;
    }
}
