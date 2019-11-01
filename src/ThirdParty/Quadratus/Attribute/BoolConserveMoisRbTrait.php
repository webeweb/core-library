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
 * Conserve mois rb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolConserveMoisRbTrait {

    /**
     * Conserve mois rb.
     *
     * @var bool
     */
    private $conserveMoisRb;

    /**
     * Get the conserve mois rb.
     *
     * @return bool Returns the conserve mois rb.
     */
    public function getConserveMoisRb() {
        return $this->conserveMoisRb;
    }

    /**
     * Set the conserve mois rb.
     *
     * @param bool $conserveMoisRb The conserve mois rb.
     */
    public function setConserveMoisRb($conserveMoisRb) {
        $this->conserveMoisRb = $conserveMoisRb;
        return $this;
    }
}
