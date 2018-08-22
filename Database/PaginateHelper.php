<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Database;

/**
 * Paginate helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Database
 */
class PaginateHelper {

    /**
     * Get a page offset and limit.
     *
     * @param integer $pageNumber The page number.
     * @param integer $divider The divider.
     * @param integer $total The total.
     * @return integer[] Returns the page offset and limit in case of success, -1 otherwise.
     */
    public static function getPageOffsetAndLimit($pageNumber, $divider, $total = -1) {
        if ($pageNumber < 0 || $divider < 0) {
            return -1;
        }
        $offset = $pageNumber * $divider;
        $limit  = $divider;
        if (0 <= $total && ($total < $offset || $total < ($offset + $limit))) {
            $offset = (self::getPagesCount($total, $divider) - 1) * $divider;
            $limit  = $total - $offset;
        }
        return [$offset, $limit];
    }

    /**
     * Get a pages count.
     *
     * @param integer $linesNumber The lines number.
     * @param integer $divider The divider.
     * @return integer Returns the pages count in case of success, -1 otherwise.
     */
    public static function getPagesCount($linesNumber, $divider) {
        if ($linesNumber < 0 || $divider < 0) {
            return -1;
        }
        $pagesCount = intval($linesNumber / $divider);
        if (0 < ($linesNumber % $divider)) {
            ++$pagesCount;
        }
        return $pagesCount;
    }

}
