<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * Float excluding VAT total trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait FloatExcludingVatTotalTrait {

    /**
     * Excluding VAT total.
     *
     * @var float
     */
    protected $excludingVatTotal;

    /**
     * Get the excluding VAT total.
     *
     * @return float Returns the excluding VAT total.
     */
    public function getExcludingVatTotal() {
        return $this->excludingVatTotal;
    }

    /**
     * Set the excluding VAT total.
     *
     * @param float $excludingVatTotal The excluding VAT total.
     */
    public function setExcludingVatTotal($excludingVatTotal) {
        $this->excludingVatTotal = $excludingVatTotal;
        return $this;
    }}
