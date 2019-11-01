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
 * Lieu email trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLieuEmailTrait {

    /**
     * Lieu email.
     *
     * @var string
     */
    private $lieuEmail;

    /**
     * Get the lieu email.
     *
     * @return string Returns the lieu email.
     */
    public function getLieuEmail() {
        return $this->lieuEmail;
    }

    /**
     * Set the lieu email.
     *
     * @param string $lieuEmail The lieu email.
     */
    public function setLieuEmail($lieuEmail) {
        $this->lieuEmail = $lieuEmail;
        return $this;
    }
}
