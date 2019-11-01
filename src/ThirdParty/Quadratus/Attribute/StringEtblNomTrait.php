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
 * Etbl nom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblNomTrait {

    /**
     * Etbl nom.
     *
     * @var string
     */
    private $etblNom;

    /**
     * Get the etbl nom.
     *
     * @return string Returns the etbl nom.
     */
    public function getEtblNom() {
        return $this->etblNom;
    }

    /**
     * Set the etbl nom.
     *
     * @param string $etblNom The etbl nom.
     */
    public function setEtblNom($etblNom) {
        $this->etblNom = $etblNom;
        return $this;
    }
}
