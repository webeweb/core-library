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
 * Mandataire social trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMandataireSocialTrait {

    /**
     * Mandataire social.
     *
     * @var bool
     */
    private $mandataireSocial;

    /**
     * Get the mandataire social.
     *
     * @return bool Returns the mandataire social.
     */
    public function getMandataireSocial() {
        return $this->mandataireSocial;
    }

    /**
     * Set the mandataire social.
     *
     * @param bool $mandataireSocial The mandataire social.
     */
    public function setMandataireSocial($mandataireSocial) {
        $this->mandataireSocial = $mandataireSocial;
        return $this;
    }
}
