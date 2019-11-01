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
 * Id prefacturation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIdPrefacturationTrait {

    /**
     * Id prefacturation.
     *
     * @var int
     */
    private $idPrefacturation;

    /**
     * Get the id prefacturation.
     *
     * @return int Returns the id prefacturation.
     */
    public function getIdPrefacturation() {
        return $this->idPrefacturation;
    }

    /**
     * Set the id prefacturation.
     *
     * @param int $idPrefacturation The id prefacturation.
     */
    public function setIdPrefacturation($idPrefacturation) {
        $this->idPrefacturation = $idPrefacturation;
        return $this;
    }
}
