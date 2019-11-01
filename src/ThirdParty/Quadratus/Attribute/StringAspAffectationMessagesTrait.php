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
 * Asp affectation messages trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAspAffectationMessagesTrait {

    /**
     * Asp affectation messages.
     *
     * @var string
     */
    private $aspAffectationMessages;

    /**
     * Get the asp affectation messages.
     *
     * @return string Returns the asp affectation messages.
     */
    public function getAspAffectationMessages() {
        return $this->aspAffectationMessages;
    }

    /**
     * Set the asp affectation messages.
     *
     * @param string $aspAffectationMessages The asp affectation messages.
     */
    public function setAspAffectationMessages($aspAffectationMessages) {
        $this->aspAffectationMessages = $aspAffectationMessages;
        return $this;
    }
}
