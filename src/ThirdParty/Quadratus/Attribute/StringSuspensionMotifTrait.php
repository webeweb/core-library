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
 * Suspension motif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSuspensionMotifTrait {

    /**
     * Suspension motif.
     *
     * @var string
     */
    private $suspensionMotif;

    /**
     * Get the suspension motif.
     *
     * @return string Returns the suspension motif.
     */
    public function getSuspensionMotif() {
        return $this->suspensionMotif;
    }

    /**
     * Set the suspension motif.
     *
     * @param string $suspensionMotif The suspension motif.
     */
    public function setSuspensionMotif($suspensionMotif) {
        $this->suspensionMotif = $suspensionMotif;
        return $this;
    }
}
