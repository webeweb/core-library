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
 * Tva cpt a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptADeduireTrait {

    /**
     * Tva cpt a deduire.
     *
     * @var string
     */
    private $tvaCptADeduire;

    /**
     * Get the tva cpt a deduire.
     *
     * @return string Returns the tva cpt a deduire.
     */
    public function getTvaCptADeduire() {
        return $this->tvaCptADeduire;
    }

    /**
     * Set the tva cpt a deduire.
     *
     * @param string $tvaCptADeduire The tva cpt a deduire.
     */
    public function setTvaCptADeduire($tvaCptADeduire) {
        $this->tvaCptADeduire = $tvaCptADeduire;
        return $this;
    }
}
