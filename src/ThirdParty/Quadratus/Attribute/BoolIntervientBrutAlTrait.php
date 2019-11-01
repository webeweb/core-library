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
 * Intervient brut al trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIntervientBrutAlTrait {

    /**
     * Intervient brut al.
     *
     * @var bool
     */
    private $intervientBrutAl;

    /**
     * Get the intervient brut al.
     *
     * @return bool Returns the intervient brut al.
     */
    public function getIntervientBrutAl() {
        return $this->intervientBrutAl;
    }

    /**
     * Set the intervient brut al.
     *
     * @param bool $intervientBrutAl The intervient brut al.
     */
    public function setIntervientBrutAl($intervientBrutAl) {
        $this->intervientBrutAl = $intervientBrutAl;
        return $this;
    }
}
