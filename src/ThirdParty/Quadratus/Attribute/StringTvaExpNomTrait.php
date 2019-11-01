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
 * Tva exp nom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaExpNomTrait {

    /**
     * Tva exp nom.
     *
     * @var string
     */
    private $tvaExpNom;

    /**
     * Get the tva exp nom.
     *
     * @return string Returns the tva exp nom.
     */
    public function getTvaExpNom() {
        return $this->tvaExpNom;
    }

    /**
     * Set the tva exp nom.
     *
     * @param string $tvaExpNom The tva exp nom.
     */
    public function setTvaExpNom($tvaExpNom) {
        $this->tvaExpNom = $tvaExpNom;
        return $this;
    }
}
