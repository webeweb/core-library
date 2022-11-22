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
use WBW\Library\System\Model\NetworkCard;
use WBW\Library\System\Model\NetworkCardInterface;
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

    /**
     * Creates a network card.
     *
     * @param string $name The name.
     * @return NetworkCardInterface Returns the network card.
     */
    public static function newNetworkCard(string $name): NetworkCardInterface {

        $ipv4 = shell_exec("ip addr show dev $name | grep 'inet ' | cut -d ' ' -f 6 | cut -f 1 -d '/'");
        $ipv6 = shell_exec("ip -o -6 addr show $name | sed -e 's/^.*inet6 \([^ ]\+\).*/\1/'");
        $mac  = shell_exec("ip addr show dev $name | grep 'link/ether ' | cut -d ' ' -f 6 | cut -f 1 -d '/'");

        $duplex = null;
        $speed  = "unknown";
        $status = "up";

        if ("lo" !== $name) {

            $duplex = shell_exec("cat /sys/class/net/$name/duplex 2> /dev/null");
            $speed  = shell_exec("cat /sys/class/net/$name/speed 2> /dev/null");
            $status = shell_exec("cat /sys/class/net/$name/operstate");
        }

        $model = new NetworkCard();
        $model->setName($name);
        $model->setDuplex(trim($duplex));
        $model->setIpv4(trim($ipv4));
        $model->setIpv6(trim($ipv6));
        $model->setMac(trim($mac));
        $model->setSpeed(trim($speed));
        $model->setStatus(trim($status));

        return $model;
    }

    /**
     * Creates the network cards.
     *
     * @return NetworkCardInterface[] Returns the network cards.
     */
    public static function newNetworkCards(): array {

        $models = [];

        $names = glob("/sys/class/net/*");

        foreach ($names as $current) {
            $models[] = static::newNetworkCard(basename($current));
        }

        return $models;
    }
}
