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
 * Immo tri par date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolImmoTriParDateTrait {

    /**
     * Immo tri par date.
     *
     * @var bool
     */
    private $immoTriParDate;

    /**
     * Get the immo tri par date.
     *
     * @return bool Returns the immo tri par date.
     */
    public function getImmoTriParDate() {
        return $this->immoTriParDate;
    }

    /**
     * Set the immo tri par date.
     *
     * @param bool $immoTriParDate The immo tri par date.
     */
    public function setImmoTriParDate($immoTriParDate) {
        $this->immoTriParDate = $immoTriParDate;
        return $this;
    }
}
