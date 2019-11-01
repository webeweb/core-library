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
 * Portable perso trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPortablePersoTrait {

    /**
     * Portable perso.
     *
     * @var string
     */
    private $portablePerso;

    /**
     * Get the portable perso.
     *
     * @return string Returns the portable perso.
     */
    public function getPortablePerso() {
        return $this->portablePerso;
    }

    /**
     * Set the portable perso.
     *
     * @param string $portablePerso The portable perso.
     */
    public function setPortablePerso($portablePerso) {
        $this->portablePerso = $portablePerso;
        return $this;
    }
}
