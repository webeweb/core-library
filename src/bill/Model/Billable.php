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

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use WBW\Library\Bill\Factory\BillableFactory;
use WBW\Library\Bill\Helper\BillableHelper;
use WBW\Library\Traits\DateTimes\DateTimeCreatedAtTrait;
use WBW\Library\Traits\DateTimes\DateTimeDateTrait;
use WBW\Library\Traits\DateTimes\DateTimeUpdatedAtTrait;
use WBW\Library\Traits\Floats\FloatDiscountRateTrait;
use WBW\Library\Traits\Floats\FloatDiscountTotalTrait;
use WBW\Library\Traits\Floats\FloatExcludingVatTotalTrait;
use WBW\Library\Traits\Floats\FloatIncludingVatTotalTrait;
use WBW\Library\Traits\Floats\FloatVatTotalTrait;
use WBW\Library\Traits\Strings\StringCommentTrait;
use WBW\Library\Traits\Strings\StringNumberTrait;
use WBW\Library\Traits\Strings\StringReferenceTrait;

/**
 * Billable.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Model
 * @abstract
 */
abstract class Billable implements BillableInterface {

    use DateTimeCreatedAtTrait;
    use DateTimeDateTrait;
    use DateTimeUpdatedAtTrait;
    use FloatDiscountTotalTrait;
    use FloatDiscountRateTrait;
    use FloatExcludingVatTotalTrait;
    use FloatIncludingVatTotalTrait;
    use FloatVatTotalTrait;
    use StringCommentTrait;
    use StringNumberTrait;
    use StringReferenceTrait;

    /**
     * Details.
     *
     * @var Collection
     */
    protected $details;

    /**
     * Parent.
     *
     * @var BillableInterface|null
     */
    protected $parent;

    /**
     * Payment date.
     *
     * @var DateTime|null
     */
    protected $paymentDate;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setDetails(new ArrayCollection());
    }

    /**
     * Clone.
     *
     * @return BillableInterface Returns this cloned billable.
     */
    public function __clone() {
        return BillableFactory::copy($this, new $this());
    }

    /**
     * {@inheritDoc}
     */
    public function addDetail(BillableDetailInterface $detail): BillableInterface {
        $this->details->add($detail);
        $detail->setBillable($this);
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getDetails(): array {
        return $this->details->toArray();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent(): ?BillableInterface {
        return $this->parent;
    }

    /**
     * {@inheritDoc}
     */
    public function getPaymentDate(): ?DateTime {
        return $this->paymentDate;
    }

    /**
     * {@inheritDoc}
     */
    public function onSubmit(): void {

        $this->setDiscountTotal(BillableHelper::calcDiscountTotal($this));
        $this->setExcludingVatTotal(BillableHelper::calcExcludingVatTotal($this));
        $this->setIncludingVatTotal(BillableHelper::calcIncludingVatTotal($this));
        $this->setVatTotal(BillableHelper::calcVatTotal($this));
    }

    /**
     * {@inheritDoc}
     */
    public function removeDetail(BillableDetailInterface $detail): BillableInterface {
        $this->details->removeElement($detail);
        $detail->setBillable(null);
        return $this;
    }

    /**
     * Set the details.
     *
     * @param Collection $details The details.
     * @return BillableInterface Returns this billable.
     */
    protected function setDetails(Collection $details): BillableInterface {
        $this->details = $details;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(?BillableInterface $parent): BillableInterface {
        $this->parent = $parent;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setPaymentDate(?DateTime $paymentDate): BillableInterface {
        $this->paymentDate = $paymentDate;
        return $this;
    }
}