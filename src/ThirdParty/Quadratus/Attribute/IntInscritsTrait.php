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
 * Inscrits trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntInscritsTrait {

    /**
     * Inscrits.
     *
     * @var int
     */
    private $inscrits;

    /**
     * Get the inscrits.
     *
     * @return int Returns the inscrits.
     */
    public function getInscrits() {
        return $this->inscrits;
    }

    /**
     * Set the inscrits.
     *
     * @param int $inscrits The inscrits.
     */
    public function setInscrits($inscrits) {
        $this->inscrits = $inscrits;
        return $this;
    }
}
