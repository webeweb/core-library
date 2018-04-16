<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Utility\Argument;

use Transliterator;

/**
 * String utility.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Utility\Argument
 * @final
 */
final class StringUtility {

    /**
     * Parse an array.
     *
     * @param array $values The array.
     * @return string Returns the array converted into key="value".
     */
    public static function parseArray(array $values) {

        // Initialize the output.
        $output = [];

        // Handle each value.
        foreach ($values as $key => $value) {

            // Check if the value is null.
            if (null === $value) {
                continue;
            }

            // Check if the value is an array.
            if (true === is_array($value)) {
                $buffer = trim(implode(" ", $value));
            } else {
                $buffer = trim($value);
            }

            // Check if the buffer is not empty.
            if ("" !== $buffer) {
                $output[] = $key . "=\"" . preg_replace("/\s+/", " ", $buffer) . "\"";
            }
        }

        // Concatenates all attributes.
        return implode(" ", $output);
    }

    /**
     * Parse a boolean.
     *
     * @param boolean $value The boolean value.
     * @return string Returns "true" in case of success, "false" otherwise.
     */
    public static function parseBoolean($value) {
        return true === $value ? "true" : "false";
    }

    /**
     * Replace.
     *
     * @param string $subject The subject.
     * @param array $searches The searches.
     * @param array $replaces The replaces.
     * @return string Returns the replaced string.
     */
    public static function replace($subject, array $searches, array $replaces) {
        return str_replace($searches, $replaces, $subject);
    }

    /**
     * Remove accents.
     *
     * @param string $str The string.
     * @return string Returns the string without accents.
     */
    public static function removeAccents($str) {
        return Transliterator::create("NFD; [:Nonspacing Mark:] Remove; NFC;")->transliterate($str);
    }

}
