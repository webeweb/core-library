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
 * Id recap trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIdRecapTrait {

    /**
     * Id recap.
     *
     * @var int
     */
    private $idRecap;

    /**
     * Get the id recap.
     *
     * @return int Returns the id recap.
     */
    public function getIdRecap() {
        return $this->idRecap;
    }

    /**
     * Set the id recap.
     *
     * @param int $idRecap The id recap.
     */
    public function setIdRecap($idRecap) {
        $this->idRecap = $idRecap;
        return $this;
    }
}
