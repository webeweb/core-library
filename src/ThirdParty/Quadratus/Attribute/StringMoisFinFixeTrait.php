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
 * Mois fin fixe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMoisFinFixeTrait {

    /**
     * Mois fin fixe.
     *
     * @var string
     */
    private $moisFinFixe;

    /**
     * Get the mois fin fixe.
     *
     * @return string Returns the mois fin fixe.
     */
    public function getMoisFinFixe() {
        return $this->moisFinFixe;
    }

    /**
     * Set the mois fin fixe.
     *
     * @param string $moisFinFixe The mois fin fixe.
     */
    public function setMoisFinFixe($moisFinFixe) {
        $this->moisFinFixe = $moisFinFixe;
        return $this;
    }
}
