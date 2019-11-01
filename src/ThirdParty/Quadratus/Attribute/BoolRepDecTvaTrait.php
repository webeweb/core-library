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
 * Rep dec tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRepDecTvaTrait {

    /**
     * Rep dec tva.
     *
     * @var bool
     */
    private $repDecTva;

    /**
     * Get the rep dec tva.
     *
     * @return bool Returns the rep dec tva.
     */
    public function getRepDecTva() {
        return $this->repDecTva;
    }

    /**
     * Set the rep dec tva.
     *
     * @param bool $repDecTva The rep dec tva.
     */
    public function setRepDecTva($repDecTva) {
        $this->repDecTva = $repDecTva;
        return $this;
    }
}
