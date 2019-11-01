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
 * Taux forfait social8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTauxForfaitSocial8Trait {

    /**
     * Taux forfait social8.
     *
     * @var string
     */
    private $tauxForfaitSocial8;

    /**
     * Get the taux forfait social8.
     *
     * @return string Returns the taux forfait social8.
     */
    public function getTauxForfaitSocial8() {
        return $this->tauxForfaitSocial8;
    }

    /**
     * Set the taux forfait social8.
     *
     * @param string $tauxForfaitSocial8 The taux forfait social8.
     */
    public function setTauxForfaitSocial8($tauxForfaitSocial8) {
        $this->tauxForfaitSocial8 = $tauxForfaitSocial8;
        return $this;
    }
}
