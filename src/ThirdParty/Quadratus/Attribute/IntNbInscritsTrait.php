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
 * Nb inscrits trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbInscritsTrait {

    /**
     * Nb inscrits.
     *
     * @var int
     */
    private $nbInscrits;

    /**
     * Get the nb inscrits.
     *
     * @return int Returns the nb inscrits.
     */
    public function getNbInscrits() {
        return $this->nbInscrits;
    }

    /**
     * Set the nb inscrits.
     *
     * @param int $nbInscrits The nb inscrits.
     */
    public function setNbInscrits($nbInscrits) {
        $this->nbInscrits = $nbInscrits;
        return $this;
    }
}
