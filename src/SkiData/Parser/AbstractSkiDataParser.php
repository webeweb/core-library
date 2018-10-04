<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\SkiData\Parser;

use DateTime;
use WBW\Library\Core\Argument\IntegerHelper;
use WBW\Library\Core\Exception\SkiData\SkiDataTooLongDataException;
use WBW\Library\Core\SkiData\API\SkiDataParserInterface;
use WBW\Library\Core\SkiData\Entity\SkiDataStartRecordFormat;

/**
 * Abstract SkiData parser.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\SkiData\Parser
 * @abstract
 */
abstract class AbstractSkiDataParser implements SkiDataParserInterface {

    /**
     * Start record format.
     *
     * @var SkiDataStartRecordFormat
     */
    private $startRecordFormat;

    /**
     * Constructor.
     */
    protected function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Decode a date string.
     *
     * @param string $str The string.
     * @return DateTime Returns the decoded string into DateTime.
     */
    protected function decodeDate($str) {
        $date = DateTime::createFromFormat("!" . self::DATE_FORMAT, $str);
        return false === $date ? null : $date;
    }

    /**
     * Decode a datetime string.
     *
     * @param string $str The string.
     * @return DateTime Returns the decoded string into DateTime.
     */
    protected function decodeDateTime($str) {
        $date = DateTime::createFromFormat(self::DATETIME_FORMAT, $str);
        return false === $date ? null : $date;
    }

    /**
     * Decode a string.
     *
     * @param string $str The string.
     * @return string Returns the decoded string into string.
     */
    protected function decodeString($str) {
        return ("" === $str || 2 === strlen($str)) ? "" : substr($str, 1, strlen($str) - 2);
    }

    /**
     * Encode a boolean value.
     *
     * @param bool $value The value.
     * @return string Returns the encoded boolean value.
     */
    protected function encodeBoolean($value) {
        return "" . IntegerHelper::parseBoolean($value);
    }

    /**
     * Encode a date value.
     *
     * @param DateTime $value The value.
     * @return string Returns the encoded datetime value.
     */
    protected function encodeDate(DateTime $value = null) {
        return null === $value ? "" : $value->format(self::DATE_FORMAT);
    }

    /**
     * Encode a datetime value.
     *
     * @param DateTime $value The value.
     * @return string Returns the encoded datetime value.
     */
    protected function encodeDateTime(DateTime $value = null) {
        return null === $value ? "" : $value->format(self::DATETIME_FORMAT);
    }

    /**
     * Encode an integer value.
     *
     * @param int $value The value.
     * @param int $length The length.
     * @return string Returns the encoded integer.
     * @throws SkiDataTooLongDataException Throws a too long data exception if the value exceeds the length.
     */
    protected function encodeInteger($value, $length) {
        $format = "%'.0" . $length . "d";
        $output = null === $value ? "" : sprintf($format, $value);
        if ($length < strlen($output)) {
            throw new SkiDataTooLongDataException($value, $length);
        }
        return $output;
    }

    /**
     * Encode a string value.
     *
     * @param string $value The value.
     * @param int $length The length.
     * @return string Returns the encoded string.
     * @throws SkiDataTooLongDataException Throws a too long data exception if the value exceeds the length.
     */
    protected function encodeString($value, $length = -1) {
        if (-1 !== $length && $length < strlen($value)) {
            throw new SkiDataTooLongDataException($value, $length);
        }
        return "\"" . substr($value, 0, (-1 === $length ? strlen($value) : $length)) . "\"";
    }

    /**
     * Get the start record format.
     *
     * @return SkiDataStartRecordFormat Returns the start record format.
     */
    public function getStartRecordFormat() {
        return $this->startRecordFormat;
    }

    /**
     * Set the start record format.
     *
     * @param SkiDataStartRecordFormat $startRecordFormat The start record format.
     * @return AbstractSkiDataParser Returns the parser.
     */
    public function setStartRecordFormat(SkiDataStartRecordFormat $startRecordFormat) {
        $this->startRecordFormat = $startRecordFormat;
        return $this;
    }

}
