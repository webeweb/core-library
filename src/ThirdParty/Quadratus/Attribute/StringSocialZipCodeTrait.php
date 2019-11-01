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
 * Social zip code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSocialZipCodeTrait {

    /**
     * Social zip code.
     *
     * @var string
     */
    private $socialZipCode;

    /**
     * Get the social zip code.
     *
     * @return string Returns the social zip code.
     */
    public function getSocialZipCode() {
        return $this->socialZipCode;
    }

    /**
     * Set the social zip code.
     *
     * @param string $socialZipCode The social zip code.
     */
    public function setSocialZipCode($socialZipCode) {
        $this->socialZipCode = $socialZipCode;
        return $this;
    }
}
