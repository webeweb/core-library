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
 * A facturer sur ex trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntAFacturerSurExTrait {

    /**
     * A facturer sur ex.
     *
     * @var int
     */
    private $aFacturerSurEx;

    /**
     * Get the a facturer sur ex.
     *
     * @return int Returns the a facturer sur ex.
     */
    public function getAFacturerSurEx() {
        return $this->aFacturerSurEx;
    }

    /**
     * Set the a facturer sur ex.
     *
     * @param int $aFacturerSurEx The a facturer sur ex.
     */
    public function setAFacturerSurEx($aFacturerSurEx) {
        $this->aFacturerSurEx = $aFacturerSurEx;
        return $this;
    }
}
