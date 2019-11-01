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
 * Soumis forfait social trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSoumisForfaitSocialTrait {

    /**
     * Soumis forfait social.
     *
     * @var bool
     */
    private $soumisForfaitSocial;

    /**
     * Get the soumis forfait social.
     *
     * @return bool Returns the soumis forfait social.
     */
    public function getSoumisForfaitSocial() {
        return $this->soumisForfaitSocial;
    }

    /**
     * Set the soumis forfait social.
     *
     * @param bool $soumisForfaitSocial The soumis forfait social.
     */
    public function setSoumisForfaitSocial($soumisForfaitSocial) {
        $this->soumisForfaitSocial = $soumisForfaitSocial;
        return $this;
    }
}
