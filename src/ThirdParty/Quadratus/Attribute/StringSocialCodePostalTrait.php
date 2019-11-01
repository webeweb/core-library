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
 * Social code postal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSocialCodePostalTrait {

    /**
     * Social code postal.
     *
     * @var string
     */
    private $socialCodePostal;

    /**
     * Get the social code postal.
     *
     * @return string Returns the social code postal.
     */
    public function getSocialCodePostal() {
        return $this->socialCodePostal;
    }

    /**
     * Set the social code postal.
     *
     * @param string $socialCodePostal The social code postal.
     */
    public function setSocialCodePostal($socialCodePostal) {
        $this->socialCodePostal = $socialCodePostal;
        return $this;
    }
}
