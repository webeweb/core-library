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
 * Social complement suite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSocialComplementSuiteTrait {

    /**
     * Social complement suite.
     *
     * @var string
     */
    private $socialComplementSuite;

    /**
     * Get the social complement suite.
     *
     * @return string Returns the social complement suite.
     */
    public function getSocialComplementSuite() {
        return $this->socialComplementSuite;
    }

    /**
     * Set the social complement suite.
     *
     * @param string $socialComplementSuite The social complement suite.
     */
    public function setSocialComplementSuite($socialComplementSuite) {
        $this->socialComplementSuite = $socialComplementSuite;
        return $this;
    }
}
