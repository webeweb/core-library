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
 * Taux forfait social trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTauxForfaitSocialTrait {

    /**
     * Taux forfait social.
     *
     * @var string
     */
    private $tauxForfaitSocial;

    /**
     * Get the taux forfait social.
     *
     * @return string Returns the taux forfait social.
     */
    public function getTauxForfaitSocial() {
        return $this->tauxForfaitSocial;
    }

    /**
     * Set the taux forfait social.
     *
     * @param string $tauxForfaitSocial The taux forfait social.
     */
    public function setTauxForfaitSocial($tauxForfaitSocial) {
        $this->tauxForfaitSocial = $tauxForfaitSocial;
        return $this;
    }
}
