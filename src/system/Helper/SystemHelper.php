<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Helper;

use RuntimeException;
use WBW\Library\System\Model\HardDisk;
use WBW\Library\System\Model\HardDiskInterface;
use WBW\Library\System\Model\Memory;
use WBW\Library\System\Model\MemoryInterface;
use WBW\Library\System\Model\Network;
use WBW\Library\System\Model\NetworkCard;
use WBW\Library\System\Model\NetworkCardInterface;
use WBW\Library\System\Model\NetworkInterface;
use WBW\Library\System\Model\OperatingSystem;
use WBW\Library\System\Model\OperatingSystemInterface;
use WBW\Library\System\Model\Processor;
use WBW\Library\System\Model\ProcessorInterface;

/**
 * System helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Helper
 */
class SystemHelper {

    /**
     * Determines if the operating system is Unix.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function isUnix(): bool {
        return !static::isWindows();
    }

    /**
     * Determines if the operating system is Windows.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function isWindows(): bool {
        return "\\" === DIRECTORY_SEPARATOR;
    }

    /**
     * Retrieves the date.
     *
     * @return string Returns the date.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveDate(): string {

        static::supported();

        return shell_exec("date");
    }

    /**
     * Retrieves the hard disks.
     *
     * @return HardDiskInterface[] Returns the hard disks.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveHardDisks(): array {

        static::supported();

        $models = [];

        $ignored = ["", "Type", "tmpfs", "devtmpfs"];

        $result = shell_exec("df -T");
        $rows   = preg_split("/[\r\n]+/", $result);

        foreach ($rows as $current) {

            $columns = preg_split("/\s+/", trim($current));

            if (false === isset($columns[1]) || true === in_array($columns[1], $ignored) || 7 < count($columns)) {
                continue;
            }

            $model = new HardDisk();
            $model->setName(trim($columns[0]));
            $model->setFileSystem(trim($columns[0]));
            $model->setType(trim($columns[1]));
            $model->setUsed(trim($columns[3]));
            $model->setAvailable(trim($columns[4]));
            $model->setUsePercent(trim($columns[5]));
            $model->setMountedOn(trim($columns[6]));

            $models[] = $model;
        }

        return $models;
    }

    /**
     * Retrieves the hostname.
     *
     * @return string Returns the hostname.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveHostname(): string {

        static::supported();

        return shell_exec("hostname");
    }

    /**
     * Retrieves the memory.
     *
     * @return MemoryInterface Returns the memory.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveMemory(): MemoryInterface {

        static::supported();

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
     * Retrieves the network.
     *
     * @return NetworkInterface Returns the network.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveNetwork(): NetworkInterface {

        static::supported();

        $gw  = shell_exec("ip route | awk '/default/ { print $3 }'");
        $dns = shell_exec("cat /etc/resolv.conf | grep -i '^nameserver' | head -n1 |cut -d ' ' -f2");

        $model = new Network();
        $model->setHostname(gethostname());
        $model->setGateway(trim($gw));
        $model->setDns(trim($dns));

        return $model;
    }

    /**
     * Retrieves a network card.
     *
     * @param string $name The name.
     * @return NetworkCardInterface Returns the network card.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveNetworkCard(string $name): NetworkCardInterface {

        static::supported();

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
     * Retrieves the network cards.
     *
     * @return NetworkCardInterface[] Returns the network cards.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveNetworkCards(): array {

        static::supported();

        $models = [];

        $result = glob("/sys/class/net/*");

        foreach ($result as $current) {
            $models[] = static::retrieveNetworkCard(basename($current));
        }

        return $models;
    }

    /**
     * Retrieves the operating system.
     *
     * @return OperatingSystemInterface Returns the operating system.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveOperatingSystem(): OperatingSystemInterface {

        static::supported();

        $codename    = shell_exec("lsb_release -c -s");
        $description = shell_exec("lsb_release -d -s");
        $id          = shell_exec("lsb_release -i -s");
        $release     = shell_exec("lsb_release -r -s");

        $model = new OperatingSystem();
        $model->setCodename(trim($codename));
        $model->setDescription(trim($description));
        $model->setId(trim($id));
        $model->setRelease(trim($release));

        return $model;
    }

    /**
     * Retrieves the processors.
     *
     * @return ProcessorInterface[] Returns the processors.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveProcessors(): array {

        static::supported();

        $models = [];

        $result = shell_exec("cat /proc/cpuinfo");

        $cores = explode(PHP_EOL . PHP_EOL, $result);

        foreach ($cores as $core) {

            if ("" === $core) {
                continue;
            }

            $values = [];

            $rows = explode(PHP_EOL, $core);

            foreach ($rows as $current) {

                if ("" === $current) {
                    continue;
                }

                $columns = explode(":", $current);

                $values[trim($columns[0])] = trim($columns[1]);
            }

            $models[] = new Processor($values);
        }

        return $models;
    }

    /**
     * Retrieves the uptime.
     *
     * @return string Returns the uptime.
     * @throws RuntimeException Throws a runtime exception.
     */
    public static function retrieveUptime(): string {

        static::supported();

        return shell_exec("uptime -p");
    }

    /**
     * Supported.
     *
     * @throws RuntimeException Throws a runtime exception.
     */
    protected static function supported(): void {

        if (false === static::isUnix()) {
            throw new RuntimeException("This operating system is unsupported");
        }
    }
}
