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
 * Tva cloture faite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTvaClotureFaiteTrait {

    /**
     * Tva cloture faite.
     *
     * @var bool
     */
    private $tvaClotureFaite;

    /**
     * Get the tva cloture faite.
     *
     * @return bool Returns the tva cloture faite.
     */
    public function getTvaClotureFaite() {
        return $this->tvaClotureFaite;
    }

    /**
     * Set the tva cloture faite.
     *
     * @param bool $tvaClotureFaite The tva cloture faite.
     */
    public function setTvaClotureFaite($tvaClotureFaite) {
        $this->tvaClotureFaite = $tvaClotureFaite;
        return $this;
    }
}
