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
 * Fin session trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFinSessionTrait {

    /**
     * Fin session.
     *
     * @var DateTime|null
     */
    private $finSession;

    /**
     * Get the fin session.
     *
     * @return DateTime|null Returns the fin session.
     */
    public function getFinSession() {
        return $this->finSession;
    }

    /**
     * Set the fin session.
     *
     * @param DateTime|null $finSession The fin session.
     */
    public function setFinSession(DateTime $finSession = null) {
        $this->finSession = $finSession;
        return $this;
    }
}
