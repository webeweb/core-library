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
 * Social nom voie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSocialNomVoieTrait {

    /**
     * Social nom voie.
     *
     * @var string
     */
    private $socialNomVoie;

    /**
     * Get the social nom voie.
     *
     * @return string Returns the social nom voie.
     */
    public function getSocialNomVoie() {
        return $this->socialNomVoie;
    }

    /**
     * Set the social nom voie.
     *
     * @param string $socialNomVoie The social nom voie.
     */
    public function setSocialNomVoie($socialNomVoie) {
        $this->socialNomVoie = $socialNomVoie;
        return $this;
    }
}
