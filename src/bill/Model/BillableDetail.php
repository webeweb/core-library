<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Model;

use WBW\Library\Traits\Floats\FloatDiscountRateTrait;
use WBW\Library\Traits\Floats\FloatExcludingVatPriceTrait;
use WBW\Library\Traits\Floats\FloatExcludingVatTotalTrait;
use WBW\Library\Traits\Floats\FloatIncludingVatPriceTrait;
use WBW\Library\Traits\Floats\FloatIncludingVatTotalTrait;
use WBW\Library\Traits\Floats\FloatQuantityTrait;
use WBW\Library\Traits\Floats\FloatVatAmountTrait;
use WBW\Library\Traits\Floats\FloatVatRateTrait;
use WBW\Library\Traits\Floats\FloatVatTotalTrait;
use WBW\Library\Traits\Strings\StringCommentTrait;
use WBW\Library\Traits\Strings\StringLabelTrait;
use WBW\Library\Traits\Strings\StringReferenceTrait;

/**
 * Billable detail.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Model
 * @abstract
 */
abstract class BillableDetail implements BillableDetailInterface {

    use FloatDiscountRateTrait;
    use FloatQuantityTrait;
    use FloatIncludingVatPriceTrait;
    use FloatIncludingVatTotalTrait;
    use FloatExcludingVatPriceTrait;
    use FloatExcludingVatTotalTrait;
    use FloatVatAmountTrait;
    use FloatVatRateTrait;
    use FloatVatTotalTrait;
    use StringCommentTrait;
    use StringLabelTrait;
    use StringReferenceTrait;

    /**
     * Billable.
     *
     * @var BillableInterface|null
     */
    protected $billable;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function getBillable(): ?BillableInterface {
        return $this->billable;
    }

    /**
     * {@inheritDoc}
     */
    public function onSubmit(): BillableDetailInterface {

    }

    /**
     * {@inheritDoc}
     */
    public function setBillable(?BillableInterface $billable): BillableDetailInterface {
        $this->billable = $billable;
        return $this;
    }
}