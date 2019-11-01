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
 * Id alerte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIdAlerteTrait {

    /**
     * Id alerte.
     *
     * @var int
     */
    private $idAlerte;

    /**
     * Get the id alerte.
     *
     * @return int Returns the id alerte.
     */
    public function getIdAlerte() {
        return $this->idAlerte;
    }

    /**
     * Set the id alerte.
     *
     * @param int $idAlerte The id alerte.
     */
    public function setIdAlerte($idAlerte) {
        $this->idAlerte = $idAlerte;
        return $this;
    }
}
