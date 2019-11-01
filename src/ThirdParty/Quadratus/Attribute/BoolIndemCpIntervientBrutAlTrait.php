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
 * Indem cp intervient brut al trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIndemCpIntervientBrutAlTrait {

    /**
     * Indem cp intervient brut al.
     *
     * @var bool
     */
    private $indemCpIntervientBrutAl;

    /**
     * Get the indem cp intervient brut al.
     *
     * @return bool Returns the indem cp intervient brut al.
     */
    public function getIndemCpIntervientBrutAl() {
        return $this->indemCpIntervientBrutAl;
    }

    /**
     * Set the indem cp intervient brut al.
     *
     * @param bool $indemCpIntervientBrutAl The indem cp intervient brut al.
     */
    public function setIndemCpIntervientBrutAl($indemCpIntervientBrutAl) {
        $this->indemCpIntervientBrutAl = $indemCpIntervientBrutAl;
        return $this;
    }
}
