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
 * Lieu edition trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLieuEditionTrait {

    /**
     * Lieu edition.
     *
     * @var string
     */
    private $lieuEdition;

    /**
     * Get the lieu edition.
     *
     * @return string Returns the lieu edition.
     */
    public function getLieuEdition() {
        return $this->lieuEdition;
    }

    /**
     * Set the lieu edition.
     *
     * @param string $lieuEdition The lieu edition.
     */
    public function setLieuEdition($lieuEdition) {
        $this->lieuEdition = $lieuEdition;
        return $this;
    }
}
