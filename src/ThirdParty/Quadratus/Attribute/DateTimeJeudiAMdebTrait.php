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
 * Jeudi a mdeb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeJeudiAMdebTrait {

    /**
     * Jeudi a mdeb.
     *
     * @var DateTime|null
     */
    private $jeudiAMdeb;

    /**
     * Get the jeudi a mdeb.
     *
     * @return DateTime|null Returns the jeudi a mdeb.
     */
    public function getJeudiAMdeb() {
        return $this->jeudiAMdeb;
    }

    /**
     * Set the jeudi a mdeb.
     *
     * @param DateTime|null $jeudiAMdeb The jeudi a mdeb.
     */
    public function setJeudiAMdeb(DateTime $jeudiAMdeb = null) {
        $this->jeudiAMdeb = $jeudiAMdeb;
        return $this;
    }
}
