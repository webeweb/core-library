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
 * Preavis non effectue deb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePreavisNonEffectueDebTrait {

    /**
     * Preavis non effectue deb.
     *
     * @var DateTime|null
     */
    private $preavisNonEffectueDeb;

    /**
     * Get the preavis non effectue deb.
     *
     * @return DateTime|null Returns the preavis non effectue deb.
     */
    public function getPreavisNonEffectueDeb() {
        return $this->preavisNonEffectueDeb;
    }

    /**
     * Set the preavis non effectue deb.
     *
     * @param DateTime|null $preavisNonEffectueDeb The preavis non effectue deb.
     */
    public function setPreavisNonEffectueDeb(DateTime $preavisNonEffectueDeb = null) {
        $this->preavisNonEffectueDeb = $preavisNonEffectueDeb;
        return $this;
    }
}
