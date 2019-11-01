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
 * Tva dest nom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaDestNomTrait {

    /**
     * Tva dest nom.
     *
     * @var string
     */
    private $tvaDestNom;

    /**
     * Get the tva dest nom.
     *
     * @return string Returns the tva dest nom.
     */
    public function getTvaDestNom() {
        return $this->tvaDestNom;
    }

    /**
     * Set the tva dest nom.
     *
     * @param string $tvaDestNom The tva dest nom.
     */
    public function setTvaDestNom($tvaDestNom) {
        $this->tvaDestNom = $tvaDestNom;
        return $this;
    }
}
