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
 * Soumis certif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSoumisCertifTrait {

    /**
     * Soumis certif.
     *
     * @var bool
     */
    private $soumisCertif;

    /**
     * Get the soumis certif.
     *
     * @return bool Returns the soumis certif.
     */
    public function getSoumisCertif() {
        return $this->soumisCertif;
    }

    /**
     * Set the soumis certif.
     *
     * @param bool $soumisCertif The soumis certif.
     */
    public function setSoumisCertif($soumisCertif) {
        $this->soumisCertif = $soumisCertif;
        return $this;
    }
}
