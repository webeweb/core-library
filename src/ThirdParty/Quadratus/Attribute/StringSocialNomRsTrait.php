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
 * Social nom rs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSocialNomRsTrait {

    /**
     * Social nom rs.
     *
     * @var string
     */
    private $socialNomRs;

    /**
     * Get the social nom rs.
     *
     * @return string Returns the social nom rs.
     */
    public function getSocialNomRs() {
        return $this->socialNomRs;
    }

    /**
     * Set the social nom rs.
     *
     * @param string $socialNomRs The social nom rs.
     */
    public function setSocialNomRs($socialNomRs) {
        $this->socialNomRs = $socialNomRs;
        return $this;
    }
}
