<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

/**
 * e ws espace.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class eWsEspace {

    /**
     * Num doss.
     *
     * @var string
     */
    private $numDoss;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the num doss.
     *
     * @return string Returns the num doss.
     */
    public function getNumDoss() {
        return $this->numDoss;
    }

    /**
     * Set the num doss.
     *
     * @param string $numDoss The num doss.
     * @return eWsEspace Returns this e ws espace.
     */
    public function setNumDoss($numDoss) {
        $this->numDoss = $numDoss;
        return $this;
    }
}
