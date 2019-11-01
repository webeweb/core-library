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
 * Tva e4 mt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTvaE4MtTrait {

    /**
     * Tva e4 mt.
     *
     * @var float
     */
    private $tvaE4Mt;

    /**
     * Get the tva e4 mt.
     *
     * @return float Returns the tva e4 mt.
     */
    public function getTvaE4Mt() {
        return $this->tvaE4Mt;
    }

    /**
     * Set the tva e4 mt.
     *
     * @param float $tvaE4Mt The tva e4 mt.
     */
    public function setTvaE4Mt($tvaE4Mt) {
        $this->tvaE4Mt = $tvaE4Mt;
        return $this;
    }
}
