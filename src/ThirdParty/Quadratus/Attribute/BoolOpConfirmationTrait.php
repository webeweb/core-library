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
 * Op confirmation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolOpConfirmationTrait {

    /**
     * Op confirmation.
     *
     * @var bool
     */
    private $opConfirmation;

    /**
     * Get the op confirmation.
     *
     * @return bool Returns the op confirmation.
     */
    public function getOpConfirmation() {
        return $this->opConfirmation;
    }

    /**
     * Set the op confirmation.
     *
     * @param bool $opConfirmation The op confirmation.
     */
    public function setOpConfirmation($opConfirmation) {
        $this->opConfirmation = $opConfirmation;
        return $this;
    }
}
