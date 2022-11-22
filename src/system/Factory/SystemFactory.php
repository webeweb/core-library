<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Factory;

use WBW\Library\System\Model\Memory;
use WBW\Library\System\Model\MemoryInterface;
use WBW\Library\System\Model\Network;
use WBW\Library\System\Model\NetworkInterface;

/**
 * System factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Factory
 */
class SystemFactory {

    /**
     * Creates a memory.
     *
     * @return MemoryInterface Returns the memory.
     */
    public static function newMemory(): MemoryInterface {

        $values = [];

        $result = shell_exec("cat /proc/meminfo");
        $rows   = explode(PHP_EOL, $result);

        foreach ($rows as $current) {

            if ("" === $current) {
                continue;
            }

            $columns = explode(":", $current);

            $key   = $columns[0];
            $value = str_replace("kB", "", trim($columns[1]));

            $values[$key] = intval($value);
        }

        return new Memory($values);
    }

    /**
     * Creates a network.
     *
     * @return NetworkInterface Returns the network.
     */
    public static function newNetwork(): NetworkInterface {

        $gw  = shell_exec("ip route | awk '/default/ { print $3 }'");
        $dns = shell_exec("cat /etc/resolv.conf | grep -i '^nameserver' | head -n1 |cut -d ' ' -f2");

        $model = new Network();
        $model->setHostname(gethostname());
        $model->setGateway(trim($gw));
        $model->setDns(trim($dns));

        return $model;
    }
}
