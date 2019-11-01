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
 * Immo jours par an trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntImmoJoursParAnTrait {

    /**
     * Immo jours par an.
     *
     * @var int
     */
    private $immoJoursParAn;

    /**
     * Get the immo jours par an.
     *
     * @return int Returns the immo jours par an.
     */
    public function getImmoJoursParAn() {
        return $this->immoJoursParAn;
    }

    /**
     * Set the immo jours par an.
     *
     * @param int $immoJoursParAn The immo jours par an.
     */
    public function setImmoJoursParAn($immoJoursParAn) {
        $this->immoJoursParAn = $immoJoursParAn;
        return $this;
    }
}
