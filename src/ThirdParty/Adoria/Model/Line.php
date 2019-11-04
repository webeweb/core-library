<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Adoria\Model;

use DateTime;
use WBW\Library\Core\Model\Attribute\StringAccountingCodeTrait;
use WBW\Library\Core\Model\Attribute\StringReferenceTrait;

/**
 * Line.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Adoria\Model
 */
class Line {

    use StringAccountingCodeTrait;
    use StringReferenceTrait;

    /**
     * Amount.
     *
     * @var string
     */
    private $amount;

    /**
     * Amount sign.
     *
     * @var string
     */
    private $amountSign;

    /**
     * Analytic code.
     *
     * @var string
     */
    private $analyticCode;

    /**
     * Booking journal code.
     *
     * @var string
     */
    private $bookingJournalCode;

    /**
     * Currency.
     *
     * @var string
     */
    private $currency;

    /**
     * Free field.
     *
     * @var string
     */
    private $freeField;

    /**
     * Invoice date.
     *
     * @var DateTime
     */
    private $invoiceDate;

    /**
     * Invoice due date.
     *
     * @var DateTime
     */
    private $invoiceDueDate;

    /**
     * Invoice number.
     *
     * @var string
     */
    private $invoiceNumber;

    /**
     * Subledger account.
     *
     * @var string
     */
    private $subledgerAccount;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Get the amount.
     *
     * @return string Returns the amount.
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * Get the amount sign.
     *
     * @return string Returns the amount sign.
     */
    public function getAmountSign() {
        return $this->amountSign;
    }

    /**
     * Get the analytic code.
     *
     * @return string Returns the analytic code.
     */
    public function getAnalyticCode() {
        return $this->analyticCode;
    }

    /**
     * Get the booking journal code.
     *
     * @return string Returns the booking journal code.
     */
    public function getBookingJournalCode() {
        return $this->bookingJournalCode;
    }

    /**
     * Get the currency.
     *
     * @return string Returns the currency.
     */
    public function getCurrency() {
        return $this->currency;
    }

    /**
     * Get the free field.
     *
     * @return string Returns the free field.
     */
    public function getFreeField() {
        return $this->freeField;
    }

    /**
     * Get the invoice date.
     *
     * @return DateTime Returns the invoice date.
     */
    public function getInvoiceDate() {
        return $this->invoiceDate;
    }

    /**
     * Get the invoice date.
     *
     * @return DateTime Returns the invoice date.
     */
    public function getInvoiceDueDate() {
        return $this->invoiceDueDate;
    }

    /**
     * Get the invoice number.
     *
     * @return string Returns the invoice number.
     */
    public function getInvoiceNumber() {
        return $this->invoiceNumber;
    }

    /**
     * Get the subledger account.
     *
     * @return string Returns the subledger account.
     */
    public function getSubledgerAccount() {
        return $this->subledgerAccount;
    }

    /**
     * Set the amount.
     *
     * @param string $amount The amount.
     * @return Line Returns this line.
     */
    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Set the amount sign.
     *
     * @param string $amountSign The amount sign.
     * @return Line Returns this line.
     */
    public function setAmountSign($amountSign) {
        $this->amountSign = $amountSign;
        return $this;
    }

    /**
     * Set the analytic code.
     *
     * @param string $analyticCode The analytic code.
     * @return Line Returns this line.
     */
    public function setAnalyticCode($analyticCode) {
        $this->analyticCode = $analyticCode;
        return $this;
    }

    /**
     * Set the booking journal code.
     *
     * @param string $bookingJournalCode The booking journal code.
     * @return Line Returns this line.
     */
    public function setBookingJournalCode($bookingJournalCode) {
        $this->bookingJournalCode = $bookingJournalCode;
        return $this;
    }

    /**
     * Set the currency.
     *
     * @param string $currency The currency.
     * @return Line Returns this line.
     */
    public function setCurrency($currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Set the free field.
     *
     * @param string $freeField The free field.
     * @return Line Returns this line.
     */
    public function setFreeField($freeField) {
        $this->freeField = $freeField;
        return $this;
    }

    /**
     * Set the invoice date.
     *
     * @param DateTime|null $invoiceDate The invoice date.
     * @return Line Returns this line.
     */
    public function setInvoiceDate(DateTime $invoiceDate = null) {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }

    /**
     * Set the invoice due date.
     *
     * @param DateTime|null $invoiceDueDate The invoice due date.
     * @return Line Returns this line.
     */
    public function setInvoiceDueDate(DateTime $invoiceDueDate = null) {
        $this->invoiceDueDate = $invoiceDueDate;
        return $this;
    }

    /**
     * Set the invoice number.
     *
     * @param string $invoiceNumber The invoice number.
     * @return Line Returns this line.
     */
    public function setInvoiceNumber($invoiceNumber) {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    /**
     * Set the subledger account.
     *
     * @param string $subledgerAccount The subledger account.
     * @return Line Returns this line.
     */
    public function setSubledgerAccount($subledgerAccount) {
        $this->subledgerAccount = $subledgerAccount;
        return $this;
    }
}
