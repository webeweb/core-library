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
 * A facturer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAFacturerTrait {

    /**
     * A facturer.
     *
     * @var bool
     */
    private $aFacturer;

    /**
     * Get the a facturer.
     *
     * @return bool Returns the a facturer.
     */
    public function getAFacturer() {
        return $this->aFacturer;
    }

    /**
     * Set the a facturer.
     *
     * @param bool $aFacturer The a facturer.
     */
    public function setAFacturer($aFacturer) {
        $this->aFacturer = $aFacturer;
        return $this;
    }
}
