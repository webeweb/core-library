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
 * Social bureau distributeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSocialBureauDistributeurTrait {

    /**
     * Social bureau distributeur.
     *
     * @var string
     */
    private $socialBureauDistributeur;

    /**
     * Get the social bureau distributeur.
     *
     * @return string Returns the social bureau distributeur.
     */
    public function getSocialBureauDistributeur() {
        return $this->socialBureauDistributeur;
    }

    /**
     * Set the social bureau distributeur.
     *
     * @param string $socialBureauDistributeur The social bureau distributeur.
     */
    public function setSocialBureauDistributeur($socialBureauDistributeur) {
        $this->socialBureauDistributeur = $socialBureauDistributeur;
        return $this;
    }
}
