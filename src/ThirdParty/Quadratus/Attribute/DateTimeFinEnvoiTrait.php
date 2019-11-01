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
 * Fin envoi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFinEnvoiTrait {

    /**
     * Fin envoi.
     *
     * @var DateTime|null
     */
    private $finEnvoi;

    /**
     * Get the fin envoi.
     *
     * @return DateTime|null Returns the fin envoi.
     */
    public function getFinEnvoi() {
        return $this->finEnvoi;
    }

    /**
     * Set the fin envoi.
     *
     * @param DateTime|null $finEnvoi The fin envoi.
     */
    public function setFinEnvoi(DateTime $finEnvoi = null) {
        $this->finEnvoi = $finEnvoi;
        return $this;
    }
}
