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
 * Situation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSituationTrait {

    /**
     * Situation.
     *
     * @var string
     */
    private $situation;

    /**
     * Get the situation.
     *
     * @return string Returns the situation.
     */
    public function getSituation() {
        return $this->situation;
    }

    /**
     * Set the situation.
     *
     * @param string $situation The situation.
     */
    public function setSituation($situation) {
        $this->situation = $situation;
        return $this;
    }
}
