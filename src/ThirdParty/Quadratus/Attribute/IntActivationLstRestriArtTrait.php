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
 * Activation lst restri art trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntActivationLstRestriArtTrait {

    /**
     * Activation lst restri art.
     *
     * @var int
     */
    private $activationLstRestriArt;

    /**
     * Get the activation lst restri art.
     *
     * @return int Returns the activation lst restri art.
     */
    public function getActivationLstRestriArt() {
        return $this->activationLstRestriArt;
    }

    /**
     * Set the activation lst restri art.
     *
     * @param int $activationLstRestriArt The activation lst restri art.
     */
    public function setActivationLstRestriArt($activationLstRestriArt) {
        $this->activationLstRestriArt = $activationLstRestriArt;
        return $this;
    }
}
