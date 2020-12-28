<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Argument\Helper;

use Transliterator;
use WBW\Library\Core\Argument\Exception\StringArgumentException;

/**
 * String helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument\Helper
 */
class StringHelper {

    /**
     * Create a DOM node.
     *
     * @param string $name The name.
     * @param string|null $value The value.
     * @param array $attributes The attributes.
     * @param bool $shortTag Short tag ?
     * @return string Returns the DOM node.
     */
    public static function domNode(string $name, ?string $value, array $attributes = [], bool $shortTag = false): string {

        $template = "<%name%%attributes%>%text%</%name%>";

        $attr = trim(StringHelper::parseArray($attributes));
        if (0 < strlen($attr)) {
            $attr = " " . $attr;
        }

        $text = null !== $value ? trim($value, " ") : "";
        if ("" === $text && true === $shortTag) {
            $template = str_replace(">%text%</%name%>", "/>", $template);
        }

        return str_replace(["%name%", "%attributes%", "%text%"], [trim($name), $attr, $text], $template);
    }

    /**
     * Determines if a value is a string.
     *
     * @param mixed $value The value.
     * @return void
     * @throws StringArgumentException Throws a String argument exception if the value is not of expected type.
     */
    public static function isString($value): void {
        if (false === is_string($value)) {
            throw new StringArgumentException($value);
        }
    }

    /**
     * Parse an array.
     *
     * @param array $values The array.
     * @return string Returns the array converted into key="value".
     */
    public static function parseArray(array $values): string {

        $output = [];

        foreach ($values as $key => $value) {

            if (null === $value) {
                continue;
            }

            if (true === is_array($value)) {
                $buffer = trim(implode(" ", $value));
            } else {
                $buffer = trim($value);
            }

            if ("" !== $buffer) {
                $output[] = $key . '="' . preg_replace("/\s+/", " ", $buffer) . '"';
            }
        }

        return implode(" ", $output);
    }

    /**
     * Parse a boolean.
     *
     * @param bool|null $value The boolean value.
     * @return string Returns "true" in case of success, "false" otherwise.
     */
    public static function parseBoolean(?bool $value): string {
        return true === $value ? "true" : "false";
    }

    /**
     * Remove accents.
     *
     * @param string $str The string.
     * @return string Returns the string without accents.
     */
    public static function removeAccents(string $str): string {
        return Transliterator::create("NFD; [:Nonspacing Mark:] Remove; NFC;")->transliterate($str);
    }
}
