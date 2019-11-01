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
 * Social code officiel commune trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSocialCodeOfficielCommuneTrait {

    /**
     * Social code officiel commune.
     *
     * @var string
     */
    private $socialCodeOfficielCommune;

    /**
     * Get the social code officiel commune.
     *
     * @return string Returns the social code officiel commune.
     */
    public function getSocialCodeOfficielCommune() {
        return $this->socialCodeOfficielCommune;
    }

    /**
     * Set the social code officiel commune.
     *
     * @param string $socialCodeOfficielCommune The social code officiel commune.
     */
    public function setSocialCodeOfficielCommune($socialCodeOfficielCommune) {
        $this->socialCodeOfficielCommune = $socialCodeOfficielCommune;
        return $this;
    }
}
