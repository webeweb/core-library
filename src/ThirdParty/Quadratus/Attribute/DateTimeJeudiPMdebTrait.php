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
 * Jeudi p mdeb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeJeudiPMdebTrait {

    /**
     * Jeudi p mdeb.
     *
     * @var DateTime|null
     */
    private $jeudiPMdeb;

    /**
     * Get the jeudi p mdeb.
     *
     * @return DateTime|null Returns the jeudi p mdeb.
     */
    public function getJeudiPMdeb() {
        return $this->jeudiPMdeb;
    }

    /**
     * Set the jeudi p mdeb.
     *
     * @param DateTime|null $jeudiPMdeb The jeudi p mdeb.
     */
    public function setJeudiPMdeb(DateTime $jeudiPMdeb = null) {
        $this->jeudiPMdeb = $jeudiPMdeb;
        return $this;
    }
}
