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
 * Social complement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSocialComplementTrait {

    /**
     * Social complement.
     *
     * @var string
     */
    private $socialComplement;

    /**
     * Get the social complement.
     *
     * @return string Returns the social complement.
     */
    public function getSocialComplement() {
        return $this->socialComplement;
    }

    /**
     * Set the social complement.
     *
     * @param string $socialComplement The social complement.
     */
    public function setSocialComplement($socialComplement) {
        $this->socialComplement = $socialComplement;
        return $this;
    }
}
