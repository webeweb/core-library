<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Algorithm\Checksum;

/**
 * Luhn algorithm.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Algorithm\Checksum
 * @final
 */
final class LuhnAlgorithm {

    /**
     * Check.
     *
     * @param string $str The string.
     * @return boolean Returns true in case of success, false otherwise.
     */
    public static function check($str) {

        // Initialize.
        $sum    = 0;
        $length = strlen($str);
        $parity = $length % 2;

        // Get the sum.
        $sum += substr($str, $length - 1);

        // Handle each character.
        for ($i = $length - 2; 0 <= $i; --$i) {

            // Get the digit.
            $digit = intval(substr($str, $i, 1));

            // Check the parity.
            if ($parity === $i % 2) {
                $digit *= 2;
            }
            if (9 < $digit) {
                $digit -= 9;
            }

            // Add the digit.
            $sum += $digit;
        }

        // Return.
        return 0 === $sum % 10;
    }

}
