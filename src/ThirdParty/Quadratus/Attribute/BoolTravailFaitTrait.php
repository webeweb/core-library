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
 * Travail fait trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTravailFaitTrait {

    /**
     * Travail fait.
     *
     * @var bool
     */
    private $travailFait;

    /**
     * Get the travail fait.
     *
     * @return bool Returns the travail fait.
     */
    public function getTravailFait() {
        return $this->travailFait;
    }

    /**
     * Set the travail fait.
     *
     * @param bool $travailFait The travail fait.
     */
    public function setTravailFait($travailFait) {
        $this->travailFait = $travailFait;
        return $this;
    }
}
