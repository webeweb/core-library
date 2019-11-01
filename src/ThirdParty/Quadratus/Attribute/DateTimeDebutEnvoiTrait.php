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

use DateTime;

/**
 * Debut envoi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDebutEnvoiTrait {

    /**
     * Debut envoi.
     *
     * @var DateTime|null
     */
    private $debutEnvoi;

    /**
     * Get the debut envoi.
     *
     * @return DateTime|null Returns the debut envoi.
     */
    public function getDebutEnvoi() {
        return $this->debutEnvoi;
    }

    /**
     * Set the debut envoi.
     *
     * @param DateTime|null $debutEnvoi The debut envoi.
     */
    public function setDebutEnvoi(DateTime $debutEnvoi = null) {
        $this->debutEnvoi = $debutEnvoi;
        return $this;
    }
}
