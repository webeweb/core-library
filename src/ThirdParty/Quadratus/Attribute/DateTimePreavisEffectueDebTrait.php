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

use DateTime;

/**
 * Preavis effectue deb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePreavisEffectueDebTrait {

    /**
     * Preavis effectue deb.
     *
     * @var DateTime|null
     */
    private $preavisEffectueDeb;

    /**
     * Get the preavis effectue deb.
     *
     * @return DateTime|null Returns the preavis effectue deb.
     */
    public function getPreavisEffectueDeb() {
        return $this->preavisEffectueDeb;
    }

    /**
     * Set the preavis effectue deb.
     *
     * @param DateTime|null $preavisEffectueDeb The preavis effectue deb.
     */
    public function setPreavisEffectueDeb(DateTime $preavisEffectueDeb = null) {
        $this->preavisEffectueDeb = $preavisEffectueDeb;
        return $this;
    }
}
