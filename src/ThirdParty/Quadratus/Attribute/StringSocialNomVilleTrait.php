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
 * Social nom ville trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSocialNomVilleTrait {

    /**
     * Social nom ville.
     *
     * @var string
     */
    private $socialNomVille;

    /**
     * Get the social nom ville.
     *
     * @return string Returns the social nom ville.
     */
    public function getSocialNomVille() {
        return $this->socialNomVille;
    }

    /**
     * Set the social nom ville.
     *
     * @param string $socialNomVille The social nom ville.
     */
    public function setSocialNomVille($socialNomVille) {
        $this->socialNomVille = $socialNomVille;
        return $this;
    }
}
