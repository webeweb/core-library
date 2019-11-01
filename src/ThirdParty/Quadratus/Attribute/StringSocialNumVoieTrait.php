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
 * Social num voie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSocialNumVoieTrait {

    /**
     * Social num voie.
     *
     * @var string
     */
    private $socialNumVoie;

    /**
     * Get the social num voie.
     *
     * @return string Returns the social num voie.
     */
    public function getSocialNumVoie() {
        return $this->socialNumVoie;
    }

    /**
     * Set the social num voie.
     *
     * @param string $socialNumVoie The social num voie.
     */
    public function setSocialNumVoie($socialNumVoie) {
        $this->socialNumVoie = $socialNumVoie;
        return $this;
    }
}
