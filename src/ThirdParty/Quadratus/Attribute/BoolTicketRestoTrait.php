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
 * Ticket resto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTicketRestoTrait {

    /**
     * Ticket resto.
     *
     * @var bool
     */
    private $ticketResto;

    /**
     * Get the ticket resto.
     *
     * @return bool Returns the ticket resto.
     */
    public function getTicketResto() {
        return $this->ticketResto;
    }

    /**
     * Set the ticket resto.
     *
     * @param bool $ticketResto The ticket resto.
     */
    public function setTicketResto($ticketResto) {
        $this->ticketResto = $ticketResto;
        return $this;
    }
}
