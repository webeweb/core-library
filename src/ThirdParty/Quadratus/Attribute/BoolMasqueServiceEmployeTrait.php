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
 * Masque service employe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMasqueServiceEmployeTrait {

    /**
     * Masque service employe.
     *
     * @var bool
     */
    private $masqueServiceEmploye;

    /**
     * Get the masque service employe.
     *
     * @return bool Returns the masque service employe.
     */
    public function getMasqueServiceEmploye() {
        return $this->masqueServiceEmploye;
    }

    /**
     * Set the masque service employe.
     *
     * @param bool $masqueServiceEmploye The masque service employe.
     */
    public function setMasqueServiceEmploye($masqueServiceEmploye) {
        $this->masqueServiceEmploye = $masqueServiceEmploye;
        return $this;
    }
}
