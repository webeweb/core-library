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
 * Demande ddte deb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDemandeDdteDebTrait {

    /**
     * Demande ddte deb.
     *
     * @var DateTime|null
     */
    private $demandeDdteDeb;

    /**
     * Get the demande ddte deb.
     *
     * @return DateTime|null Returns the demande ddte deb.
     */
    public function getDemandeDdteDeb() {
        return $this->demandeDdteDeb;
    }

    /**
     * Set the demande ddte deb.
     *
     * @param DateTime|null $demandeDdteDeb The demande ddte deb.
     */
    public function setDemandeDdteDeb(DateTime $demandeDdteDeb = null) {
        $this->demandeDdteDeb = $demandeDdteDeb;
        return $this;
    }
}
