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
 * Rep es trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRepEsTrait {

    /**
     * Rep es.
     *
     * @var bool
     */
    private $repEs;

    /**
     * Get the rep es.
     *
     * @return bool Returns the rep es.
     */
    public function getRepEs() {
        return $this->repEs;
    }

    /**
     * Set the rep es.
     *
     * @param bool $repEs The rep es.
     */
    public function setRepEs($repEs) {
        $this->repEs = $repEs;
        return $this;
    }
}
