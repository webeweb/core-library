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
 * Social trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSocialTrait {

    /**
     * Social.
     *
     * @var bool
     */
    private $social;

    /**
     * Get the social.
     *
     * @return bool Returns the social.
     */
    public function getSocial() {
        return $this->social;
    }

    /**
     * Set the social.
     *
     * @param bool $social The social.
     */
    public function setSocial($social) {
        $this->social = $social;
        return $this;
    }
}
