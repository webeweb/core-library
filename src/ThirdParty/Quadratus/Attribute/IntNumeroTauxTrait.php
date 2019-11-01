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
 * Numero taux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroTauxTrait {

    /**
     * Numero taux.
     *
     * @var int
     */
    private $numeroTaux;

    /**
     * Get the numero taux.
     *
     * @return int Returns the numero taux.
     */
    public function getNumeroTaux() {
        return $this->numeroTaux;
    }

    /**
     * Set the numero taux.
     *
     * @param int $numeroTaux The numero taux.
     */
    public function setNumeroTaux($numeroTaux) {
        $this->numeroTaux = $numeroTaux;
        return $this;
    }
}
