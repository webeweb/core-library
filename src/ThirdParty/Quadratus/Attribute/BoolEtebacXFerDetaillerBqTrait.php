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
 * Etebac x fer detailler bq trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEtebacXFerDetaillerBqTrait {

    /**
     * Etebac x fer detailler bq.
     *
     * @var bool
     */
    private $etebacXFerDetaillerBq;

    /**
     * Get the etebac x fer detailler bq.
     *
     * @return bool Returns the etebac x fer detailler bq.
     */
    public function getEtebacXFerDetaillerBq() {
        return $this->etebacXFerDetaillerBq;
    }

    /**
     * Set the etebac x fer detailler bq.
     *
     * @param bool $etebacXFerDetaillerBq The etebac x fer detailler bq.
     */
    public function setEtebacXFerDetaillerBq($etebacXFerDetaillerBq) {
        $this->etebacXFerDetaillerBq = $etebacXFerDetaillerBq;
        return $this;
    }
}
