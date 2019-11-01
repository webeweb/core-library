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
 * Debut session trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDebutSessionTrait {

    /**
     * Debut session.
     *
     * @var DateTime|null
     */
    private $debutSession;

    /**
     * Get the debut session.
     *
     * @return DateTime|null Returns the debut session.
     */
    public function getDebutSession() {
        return $this->debutSession;
    }

    /**
     * Set the debut session.
     *
     * @param DateTime|null $debutSession The debut session.
     */
    public function setDebutSession(DateTime $debutSession = null) {
        $this->debutSession = $debutSession;
        return $this;
    }
}
