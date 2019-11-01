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
 * A transferer en p trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolATransfererEnPTrait {

    /**
     * A transferer en p.
     *
     * @var bool
     */
    private $aTransfererEnP;

    /**
     * Get the a transferer en p.
     *
     * @return bool Returns the a transferer en p.
     */
    public function getATransfererEnP() {
        return $this->aTransfererEnP;
    }

    /**
     * Set the a transferer en p.
     *
     * @param bool $aTransfererEnP The a transferer en p.
     */
    public function setATransfererEnP($aTransfererEnP) {
        $this->aTransfererEnP = $aTransfererEnP;
        return $this;
    }
}
