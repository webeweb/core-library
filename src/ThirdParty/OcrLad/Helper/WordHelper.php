<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\OcrLad\Helper;

use WBW\Library\Core\ThirdParty\OcrLad\Model\Word;

/**
 * Word helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\ThirdParty\OcrLad\Helper
 */
class WordHelper {

    /**
     * Implode the words.
     *
     * @param Word[] $words The words.
     * @param string $glue The glue.
     * @return string Returns the imploded words.
     */
    public static function implodeWords(array $words, $glue = "") {

        $output = [];

        /** @var Word $current */
        foreach ($words as $current) {
            $output[] = $current->getContent();
        }

        return implode($glue, $output);
    }

}