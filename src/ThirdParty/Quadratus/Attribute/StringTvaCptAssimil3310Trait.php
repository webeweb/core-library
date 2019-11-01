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
 * Tva cpt assimil3310 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptAssimil3310Trait {

    /**
     * Tva cpt assimil3310.
     *
     * @var string
     */
    private $tvaCptAssimil3310;

    /**
     * Get the tva cpt assimil3310.
     *
     * @return string Returns the tva cpt assimil3310.
     */
    public function getTvaCptAssimil3310() {
        return $this->tvaCptAssimil3310;
    }

    /**
     * Set the tva cpt assimil3310.
     *
     * @param string $tvaCptAssimil3310 The tva cpt assimil3310.
     */
    public function setTvaCptAssimil3310($tvaCptAssimil3310) {
        $this->tvaCptAssimil3310 = $tvaCptAssimil3310;
        return $this;
    }
}
