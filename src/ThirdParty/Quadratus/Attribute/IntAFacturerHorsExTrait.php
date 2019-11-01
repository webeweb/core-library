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
 * A facturer hors ex trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntAFacturerHorsExTrait {

    /**
     * A facturer hors ex.
     *
     * @var int
     */
    private $aFacturerHorsEx;

    /**
     * Get the a facturer hors ex.
     *
     * @return int Returns the a facturer hors ex.
     */
    public function getAFacturerHorsEx() {
        return $this->aFacturerHorsEx;
    }

    /**
     * Set the a facturer hors ex.
     *
     * @param int $aFacturerHorsEx The a facturer hors ex.
     */
    public function setAFacturerHorsEx($aFacturerHorsEx) {
        $this->aFacturerHorsEx = $aFacturerHorsEx;
        return $this;
    }
}
