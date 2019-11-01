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
 * Lieu complement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLieuComplementTrait {

    /**
     * Lieu complement.
     *
     * @var string
     */
    private $lieuComplement;

    /**
     * Get the lieu complement.
     *
     * @return string Returns the lieu complement.
     */
    public function getLieuComplement() {
        return $this->lieuComplement;
    }

    /**
     * Set the lieu complement.
     *
     * @param string $lieuComplement The lieu complement.
     */
    public function setLieuComplement($lieuComplement) {
        $this->lieuComplement = $lieuComplement;
        return $this;
    }
}
