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
 * Rebut vaut cession trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRebutVautCessionTrait {

    /**
     * Rebut vaut cession.
     *
     * @var bool
     */
    private $rebutVautCession;

    /**
     * Get the rebut vaut cession.
     *
     * @return bool Returns the rebut vaut cession.
     */
    public function getRebutVautCession() {
        return $this->rebutVautCession;
    }

    /**
     * Set the rebut vaut cession.
     *
     * @param bool $rebutVautCession The rebut vaut cession.
     */
    public function setRebutVautCession($rebutVautCession) {
        $this->rebutVautCession = $rebutVautCession;
        return $this;
    }
}
