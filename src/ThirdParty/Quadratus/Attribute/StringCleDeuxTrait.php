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
 * Cle deux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleDeuxTrait {

    /**
     * Cle deux.
     *
     * @var string
     */
    private $cleDeux;

    /**
     * Get the cle deux.
     *
     * @return string Returns the cle deux.
     */
    public function getCleDeux() {
        return $this->cleDeux;
    }

    /**
     * Set the cle deux.
     *
     * @param string $cleDeux The cle deux.
     */
    public function setCleDeux($cleDeux) {
        $this->cleDeux = $cleDeux;
        return $this;
    }
}
