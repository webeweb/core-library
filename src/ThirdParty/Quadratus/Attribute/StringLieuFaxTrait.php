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
 * Lieu fax trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLieuFaxTrait {

    /**
     * Lieu fax.
     *
     * @var string
     */
    private $lieuFax;

    /**
     * Get the lieu fax.
     *
     * @return string Returns the lieu fax.
     */
    public function getLieuFax() {
        return $this->lieuFax;
    }

    /**
     * Set the lieu fax.
     *
     * @param string $lieuFax The lieu fax.
     */
    public function setLieuFax($lieuFax) {
        $this->lieuFax = $lieuFax;
        return $this;
    }
}
