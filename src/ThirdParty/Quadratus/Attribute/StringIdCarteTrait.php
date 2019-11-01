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
 * Id carte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIdCarteTrait {

    /**
     * Id carte.
     *
     * @var string
     */
    private $idCarte;

    /**
     * Get the id carte.
     *
     * @return string Returns the id carte.
     */
    public function getIdCarte() {
        return $this->idCarte;
    }

    /**
     * Set the id carte.
     *
     * @param string $idCarte The id carte.
     */
    public function setIdCarte($idCarte) {
        $this->idCarte = $idCarte;
        return $this;
    }
}
