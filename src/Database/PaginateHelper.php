<?php

/*
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
     * @param int $pageNumber The page number.
     * @param int $divider The divider.
     * @param int $total The total.
     * @return int[] Returns the page offset and limit in case of success, -1 otherwise.
     */
    public static function getPageOffsetAndLimit($pageNumber, $divider, $total = -1) {
        if ($pageNumber < 0 || $divider < 0) {
            return -1;
        }
        $offset = $pageNumber * $divider;
        $limit  = $divider;
        if (0 <= $total && ($total < $offset || $total < ($offset + $limit))) {
            $offset = (static::getPagesCount($total, $divider) - 1) * $divider;
            $limit  = $total - $offset;
        }
        return [$offset, $limit];
    }

    /**
     * Get a pages count.
     *
     * @param int $linesNumber The lines number.
     * @param int $divider The divider.
     * @return int Returns the pages count in case of success, -1 otherwise.
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
