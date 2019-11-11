<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Adoria\Normalizer;

use DateTime;
use WBW\Library\Core\Argument\Helper\ArrayHelper;
use WBW\Library\Core\ThirdParty\Adoria\Model\Line;
use WBW\Library\Core\ThirdParty\Adoria\Model\Result;

/**
 * Response normalizer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Adoria\Normalizer
 */
class ResponseNormalizer {

    /**
     * Denormalize date format.
     *
     * @var string
     */
    const DENORMALIZE_DATE_FORMAT = RequestNormalizer::NORMALIZE_DATE_FORMAT;

    /**
     * Denormalize a line.
     *
     * @param string $rawResponse The raw response.
     * @return Line Returns the line.
     */
    public static function denormalizeLine($rawResponse) {

        $decodedResponse = json_decode($rawResponse, true);

        $invoiceDate    = DateTime::createFromFormat(self::DENORMALIZE_DATE_FORMAT, ArrayHelper::get($decodedResponse, "InvoiceDate"));
        $invoiceDueDate = DateTime::createFromFormat(self::DENORMALIZE_DATE_FORMAT, ArrayHelper::get($decodedResponse, "InvoiceDueDate"));

        $model = new Line();

        $model->setAccountingCode(ArrayHelper::get($decodedResponse, "AccountingCode"));
        $model->setAnalyticCode(ArrayHelper::get($decodedResponse, "AnalyticCode"));
        $model->setAmount(ArrayHelper::get($decodedResponse, "Amount"));
        $model->setAmountSign(ArrayHelper::get($decodedResponse, "AmountSign"));
        $model->setBookingJournalCode(ArrayHelper::get($decodedResponse, "BookingJournalCode"));
        $model->setCurrency(ArrayHelper::get($decodedResponse, "Currency"));
        $model->setFreeField(ArrayHelper::get($decodedResponse, "FreeField"));
        $model->setInvoiceDate(false !== $invoiceDate ? $invoiceDate : null);
        $model->setInvoiceDueDate(false !== $invoiceDueDate ? $invoiceDueDate : null);
        $model->setInvoiceNumber(ArrayHelper::get($decodedResponse, "InvoiceNumber"));
        $model->setReference(ArrayHelper::get($decodedResponse, "Reference"));
        $model->setSubledgerAccount(ArrayHelper::get($decodedResponse, "SubledgerAccount"));

        return $model;
    }

    /**
     * Denormalize a result.
     *
     * @param string $rawResponse The raw response.
     * @return Result Returns the result.
     */
    public static function denormalizeResult($rawResponse) {

        $model = new Result();

        $decodedResponse = json_decode($rawResponse, true);
        if (null === $decodedResponse) {
            return $model;
        }

        $lines = [];

        $data = ArrayHelper::get($decodedResponse, "Datas", []);
        if (null === $data) {
            $data = [];
        }

        foreach ($data as $current) {
            $lines[] = static::denormalizeLine(json_encode($current));
        }

        $model->setData($lines);
        $model->setErrors(ArrayHelper::get($decodedResponse, "Errors", []));
        $model->setReturnCode(intval(ArrayHelper::get($decodedResponse, "ReturnCode", -1)));

        return $model;
    }
}
