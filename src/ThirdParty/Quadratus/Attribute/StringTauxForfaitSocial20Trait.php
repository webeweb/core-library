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
 * Taux forfait social20 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTauxForfaitSocial20Trait {

    /**
     * Taux forfait social20.
     *
     * @var string
     */
    private $tauxForfaitSocial20;

    /**
     * Get the taux forfait social20.
     *
     * @return string Returns the taux forfait social20.
     */
    public function getTauxForfaitSocial20() {
        return $this->tauxForfaitSocial20;
    }

    /**
     * Set the taux forfait social20.
     *
     * @param string $tauxForfaitSocial20 The taux forfait social20.
     */
    public function setTauxForfaitSocial20($tauxForfaitSocial20) {
        $this->tauxForfaitSocial20 = $tauxForfaitSocial20;
        return $this;
    }
}
